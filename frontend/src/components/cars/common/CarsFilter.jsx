import React from "react";
import TextField from "@mui/material/TextField";
import Box from "@mui/material/Box";
import { Typography } from "@mui/material";

const CarsFilter = ({ filterData, setFilterData }) => {

  const onChangeFilterData = (name, value) => {
    setFilterData({ ...filterData, [name]: value });
  };

  return (
    <Box mb={2}>
      <Typography variant="h6" component="h6" mb={1}>
        Filter
      </Typography>
      <Box mb={2}>
        <TextField
          id="bookingId"
          label="Booking Id"
          variant="outlined"
          fullWidth
          size="small"
          name="bookingId"
          defaultValue={filterData.name ?? ""}
          onChange={(event) => onChangeFilterData("bookingId", event.target.value)}
          sx={{ width: 200 }}
        />
      </Box>
      <Box mb={2}>
        <TextField
          id="carId"
          label="Car Id"
          variant="outlined"
          fullWidth
          size="small"
          name="carId"
          defaultValue={filterData.name ?? ""}
          onChange={(event) => onChangeFilterData("carId", event.target.value)}
          sx={{ width: 200 }}
        />
      </Box>
    </Box>
  );
};

export default CarsFilter;
