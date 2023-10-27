import { lazy } from "react";

const HomePage = lazy(() => import("../pages/home/HomePage"));
const LoginPage = lazy(() => import("../pages/login/LoginPage"));
const RegistrationPage = lazy(() => import("../pages/registration/RegistrationPage"));

const routes = [
  {
    path: "/",
    element: <HomePage />
  },
  {
    path: "/login",
    element: <LoginPage />
  },
  {
    path: "/registration",
    element: <RegistrationPage />
  }
];

export default routes;