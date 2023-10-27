<?php

namespace App\EntityListener;

use App\Entity\User;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserEntityListener
{

    /**
     * @var UserPasswordHasherInterface
     */
    private UserPasswordHasherInterface $passwordHasher;

    /**
     * @param UserPasswordHasherInterface $passwordHasher
     */
    public function __construct(UserPasswordHasherInterface $passwordHasher,
    )
    {
        $this->passwordHasher = $passwordHasher;

    }

    /**
     * @param User $user
     * @param LifecycleEventArgs $eventArgs
     * @return void
     */
    public function prePersist(User $user, LifecycleEventArgs $eventArgs): void
    {
        if ($user->getPassword()) {
            $hashedPassword = $this->passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
        }
    }

}