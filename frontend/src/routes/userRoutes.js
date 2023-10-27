import { lazy } from "react";
import routes from "./routes";

const CarsPage = lazy(() => import("../pages/cars/CarsPage"));

const userRoutes = [
  {
    path: "/panel/cars",
    element: <CarsPage />
  },
];

const userRoutesConcat = userRoutes.concat(routes);

export default userRoutesConcat;