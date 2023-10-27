import React, { useEffect, useState } from "react";
import { NavLink, useNavigate } from "react-router-dom";
import axios from "axios";
import { Helmet } from "react-helmet-async";
import { Breadcrumbs, Button, Link, Typography } from "@mui/material";
import RegistrationForm from "./RegistrationForm";
import Notification from "../elemets/notification/Notification";
import { responseStatus } from "../../utils/consts";

const Registration = () => {
  const navigate = useNavigate();

  const [registrationData, setRegistrationData] = useState();
  const [error, setError] = useState(null);
  const [loading, setLoading] = useState(false);
  const [notification, setNotification] = useState({
    visible: false,
    type: "",
    message: ""
  });


  const registrationRequest = () => {
    if (!registrationData) {
      return;
    }

    setLoading(true);

    axios.post(`/api/users`, registrationData).then(response => {
      if (response.status === responseStatus.HTTP_CREATED) {
        localStorage.setItem("registrationSuccess", "true");
        navigate("/");
      }
    }).catch();
  };

  useEffect(() => {
    registrationRequest();
  }, [registrationData]);

  return (
    <>
      {notification.visible &&
        <Notification
          notification={notification}
          setNotification={setNotification}
        />
      }
      <Helmet>
        <title>
          Sign Up
        </title>
      </Helmet>
      <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center" }}>
        <Breadcrumbs aria-label="breadcrumb" style={{ marginTop: "35px" }}>
          <Link component={NavLink} underline="hover" color="inherit" to="/">
            Home
          </Link>
          <Typography color="text.primary">Sign Up</Typography>
        </Breadcrumbs>
      </div>
      <RegistrationForm
        setRegistrationData={setRegistrationData}
        loading={loading}
      />
    </>
  );
};

export default Registration;