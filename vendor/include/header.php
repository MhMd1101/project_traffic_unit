<?php
session_start();

if (!isset($_SESSION['full_name'])) {
    header('Location: login');
}
?>

<!DOCTYPE html>
<html lang="en" ng-app="demo">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Front page</title>

    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> -->

    <link rel="stylesheet" href="../vendor/layout/css/icon.css">
    <link rel="stylesheet" href="../vendor/layout/css/css.css">


    <link rel="stylesheet" href="../vendor/layout/css/bootstrap.css">
    <link rel="stylesheet" href="../vendor/layout/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendor/layout/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/layout/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../vendor/layout/css/style.css">
    <link rel="stylesheet" href="../vendor/layout/css/definition.css">
    <link rel="stylesheet" href="../vendor/layout/css/responsive.css">

</head>

<body>