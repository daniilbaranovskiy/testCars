import React from "react";
import CarsItem from "./CarsItem";
import Table from "@mui/material/Table";
import TableHead from "@mui/material/TableHead";
import TableBody from "@mui/material/TableBody";
import TableRow from "@mui/material/TableRow";
import TableCell from "@mui/material/TableCell";
import TableContainer from "@mui/material/TableContainer";
import Paper from "@mui/material/Paper";

const CarsList = ({ cars }) => {
  return (
    <TableContainer component={Paper}>
      <Table>
        <TableHead>
          <TableRow>
            <TableCell>Booking ID</TableCell>
            <TableCell>Car ID</TableCell>
            <TableCell>Rental Start Date</TableCell>
            <TableCell>Rental End Date</TableCell>
            <TableCell>Days Not Rented</TableCell>
            <TableCell>Days in month</TableCell>
          </TableRow>
        </TableHead>
        <TableBody>
          {cars &&
            cars.map((car, key) => (
              <CarsItem key={key} car={car} />
            ))}
        </TableBody>
      </Table>
    </TableContainer>
  );
};

export default CarsList;
