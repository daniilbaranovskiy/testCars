import React from "react";
import TableRow from "@mui/material/TableRow";
import TableCell from "@mui/material/TableCell";
import formatDate from "../../../utils/formatDate";

function isCarFreeDuringDay (date) {
  const startHour = 9;
  const endHour = 21;
  const currentDate = new Date(date);
  const hours = currentDate.getHours();

  return hours < startHour || hours >= endHour;
}

function calculateDaysNotRented (startDate, endDate) {
  const start = new Date(startDate);
  const end = new Date(endDate);
  let freeDays = 0;

  while (start <= end) {
    if (isCarFreeDuringDay(start)) {
      freeDays++;
    }
    start.setDate(start.getDate() + 1);
  }

  return freeDays;
}

function getDaysInMonth (year, month) {
  return new Date(year, month, 0).getDate();
}

const CarsItem = ({ car }) => {
  const startDate = formatDate(car.startDate);
  const endDate = formatDate(car.endDate);
  const daysNotRented = calculateDaysNotRented(car.startDate, car.endDate);
  const year = new Date(car.startDate).getFullYear();
  const month = new Date(car.startDate).getMonth() + 1;
  const daysInMonth = getDaysInMonth(year, month);

  return (
    <TableRow>
      <TableCell>{car.bookingId}</TableCell>
      <TableCell>{car.carId}</TableCell>
      <TableCell>{startDate}</TableCell>
      <TableCell>{endDate}</TableCell>
      <TableCell>{daysNotRented}</TableCell>
      <TableCell>{daysInMonth}</TableCell>
    </TableRow>
  );
};

export default CarsItem;
