import React from "react";
import {
  Button,
  FormControl,
  IconButton,
  Input,
  InputAdornment,
  InputLabel,
  TextField,
  Typography
} from "@mui/material";
import { Visibility, VisibilityOff } from "@mui/icons-material";

const RegistrationForm = ({ setRegistrationData, loading }) => {
  const handleSubmit = (event) => {
    event.preventDefault();

    setRegistrationData({
      email: event.target.email.value,
      password: event.target.password.value,
      firstName: event.target.firstName.value,
      lastName: event.target.lastName.value
    });
  };

  const [showPassword, setShowPassword] = React.useState(false);

  const handleClickShowPassword = () => setShowPassword((show) => !show);

  return (
    <form className="auth-form" onSubmit={handleSubmit}>
      <Typography variant="h4" component="h1">
        Sign Up!
      </Typography>
      <TextField
        variant="standard"
        id="email"
        type="email"
        label="E-mail"
        name="email"
        required
      />
      <FormControl variant="standard">
        <InputLabel htmlFor="standard-adornment-password">Password</InputLabel>
        <Input
          type={showPassword ? "text" : "password"}
          id="password"
          name="password"
          endAdornment={
            <InputAdornment position="end">
              <IconButton
                aria-label="toggle password visibility"
                onClick={handleClickShowPassword}
              >
                {showPassword ? <VisibilityOff /> : <Visibility />}
              </IconButton>
            </InputAdornment>
          }
        />
      </FormControl>
      <TextField
        variant="standard"
        id="firstName"
        label="First Name"
        name="firstName"
        required
      />
      <TextField
        variant="standard"
        id="lastName"
        label="Last Name"
        name="lastName"
        required
      />
      <Button
        variant="contained"
        type="submit"
        disabled={loading}
      >
        Sign Up
      </Button>
    </form>
  );
};

export default RegistrationForm;
