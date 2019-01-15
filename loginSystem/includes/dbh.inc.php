<?php

$servername = "localhost";
$username = "root";
$dbpassword = "root";
$dbname = "loginsys";

$conn = mysqli_connect($servername, $username, $dbpassword, $dbname);

if (!$conn) {
	die("Connection Failed: ".mysqli_connect_error());
}