import React, { useEffect, useState } from "react";
import axios from "axios";
import { responseStatus } from "../../../utils/consts";
import { Helmet } from "react-helmet-async";
import { Breadcrumbs, Link, Pagination, Typography } from "@mui/material";
import { NavLink, useNavigate, useSearchParams } from "react-router-dom";
import CarsList from "./CarsList";
import { checkFilterItem, fetchFilterData } from "../../../utils/fetchFilterData";
import userAuthenticationConfig from "../../../utils/userAuthenticationConfig";
import CarsFilter from "./CarsFilter";

const CarsContainer = () => {

  const navigate = useNavigate();
  const [searchParams] = useSearchParams();
  const [cars, setCars] = useState(null);

  const [paginationInfo, setPaginationInfo] = useState({
    totalItems: null,
    totalPageCount: null,
    itemsPerPage: 8
  });

  const [filterData, setFilterData] = useState({
    "page": checkFilterItem(searchParams, "page", 1, true),
    "bookingId": checkFilterItem(searchParams, "bookingId", null),
    "carId": checkFilterItem(searchParams, "carId", null)
  });

  const fetchBooking = () => {
    let filterUrl = fetchFilterData(filterData);

    navigate(filterUrl);
    axios.get("/api/rc-bookings" + filterUrl + "&itemsPerPage=" + paginationInfo.itemsPerPage, userAuthenticationConfig()).then((response) => {
      if (response.status === responseStatus.HTTP_OK && response.data["hydra:member"]) {
        setCars(response.data["hydra:member"]);
        setPaginationInfo({
          ...paginationInfo,
          totalItems: response.data["hydra:totalItems"],
          totalPageCount: Math.ceil(response.data["hydra:totalItems"] / paginationInfo.itemsPerPage)
        });
      }
    }).catch((error) => {
      console.log("error");
    });
  };

  const onChangePage = (event, page) => {
    setFilterData({ ...filterData, page: page });
  };

  useEffect(() => {
    fetchBooking();
  }, [filterData]);

  return (
    <>
      <Helmet>
        <title>
          Cars
        </title>
      </Helmet>
      <Breadcrumbs aria-label="breadcrumb">
        <Link component={NavLink} underline="hover" color="inherit" to="/">
          Home
        </Link>
        <Typography color="text.primary">Cars</Typography>
      </Breadcrumbs>
      <Typography variant="h4" component="h1" mt={1}>
        Cars list
      </Typography>
      <CarsFilter
        filterData={filterData}
        setFilterData={setFilterData}
      />
      <CarsList cars={cars} />
      {paginationInfo.totalPageCount &&
        <Pagination
          count={paginationInfo.totalPageCount}
          shape="rounded"
          page={filterData.page}
          onChange={(event, page) => onChangePage(event, page)}
        />}
    </>
  );
};

export default CarsContainer;