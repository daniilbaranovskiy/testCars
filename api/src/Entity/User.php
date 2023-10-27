<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\EntityListener\UserEntityListener;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\EntityListeners([UserEntityListener::class])]
#[ApiResource(
    collectionOperations: [
        "get"  => [
            "method"                => "GET",
            "normalization_context" => ["groups" => ["get:collection:user"]],
            "order"                 => ["registrationDate" => "DESC"],
            "security"              => "is_granted('" . User::ROLE_ADMIN . "')"
        ],
        "post" => [
            "method"                  => "POST",
            "denormalization_context" => ["groups" => ["post:collection:user"]],
            "normalization_context"   => ["groups" => ["get:item:user"]]
        ]
    ],
    itemOperations: [
        "get"    => [
            "method"                => "GET",
            "normalization_context" => ["groups" => ["get:collection:user"]],
            "security"              => "is_granted('" . User::ROLE_ADMIN . "') or object.getId() == user.getId()"
        ],
        "put"    => [
            "method"                  => "PUT",
            "denormalization_context" => ["groups" => ["put:item:user"]],
            "normalization_context"   => ["groups" => ["get:item:user"]],
            "security"                => "is_granted('" . User::ROLE_ADMIN . "') or object.getId() == user.getId())"
        ],
        "delete" => [
            "method"   => "DELETE",
            "security" => "is_granted('" . User::ROLE_ADMIN . "') or object.getId() == user.getId())"
        ]
    ],
)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{

    public const ROLE_USER  = "ROLE_USER";
    public const ROLE_ADMIN = "ROLE_ADMIN";


    /**
     * @var int|null
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var string|null
     */
    #[Groups([
        "get:collection:user",
        "get:item:user",
        "post:collection:user",
        "put:item:user"
    ])]
    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    /**
     * @var array
     */
    #[ORM\Column]
    private array $roles = [];

    public function __construct()
    {
        $this->roles = [self::ROLE_USER];
    }

    /**
     * @var string The hashed password
     */
    #[Groups([
        "get:item:user",
        "post:collection:user",
        "put:item:user"
    ])]
    #[ORM\Column]
    private ?string $password = null;

    /**
     * @var string|null
     */
    #[Groups([
        "get:collection:user",
        "get:item:user",
        "post:collection:user",
        "put:item:user"
    ])]
    #[ORM\Column(length: 255)]
    private ?string $firstName = null;

    /**
     * @var string|null
     */
    #[Groups([
        "get:collection:user",
        "get:item:user",
        "post:collection:user",
        "put:item:user"
    ])]
    #[ORM\Column(length: 255)]
    private ?string $lastName = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string)$this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string)$this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

}
