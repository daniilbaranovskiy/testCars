import { Helmet } from "react-helmet-async";
import { NavLink } from "react-router-dom";
import { Button, ButtonGroup, Typography } from "@mui/material";
import { useContext, useEffect, useState } from "react";
import { AppContext } from "../../App";
import Notification from "../../components/elemets/notification/Notification";
import eventBus from "../../utils/eventBus";

const HomePage = () => {
  const { authenticated } = useContext(AppContext);
  const [notification, setNotification] = useState({
    visible: false,
    type: "",
    message: ""
  });
  useEffect(() => {
    const registrationSuccess = localStorage.getItem("registrationSuccess");
    if (registrationSuccess === "true") {
      setNotification({
        visible: true,
        type: "success",
        message:
          "User registration was successful, you can log in to your account."
      });

      localStorage.removeItem("registrationSuccess");
    }
  }, []);
  return (
    <>
      {notification.visible && (
        <Notification
          notification={notification}
          setNotification={setNotification}
        />
      )}
      <Helmet>
        <title>
          Welcome
        </title>
      </Helmet>
      <div style={{ textAlign: "center" }}>
        <Typography variant="h3" component="h1" mb={3}>
          Welcome!
        </Typography>
        <ButtonGroup variant="contained" aria-label="outlined primary button group">
          <Button
            to={authenticated ? "/panel/cars" : "/login"}
            component={NavLink}
          >
            {authenticated ? "Cars" : "Sign in"}
          </Button>
          {!authenticated &&
            <Button
              variant="outlined"
              to="/registration"
              component={NavLink}
            >
              Sign Up
            </Button>
          }
          {authenticated &&
            <Button
              variant="outlined"
              onClick={() => eventBus.dispatch("logout")}
              component={NavLink}
            >
              Log out
            </Button>
          }
        </ButtonGroup>
      </div>
    </>
  );
};

export default HomePage;