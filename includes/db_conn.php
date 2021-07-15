<?php

$sname= "localhost";
$unmae= "root";
$password = "db@BarackAli.123";

$db_name = "login-db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	die("Connection failed! ".mysqli_connect_error());
}