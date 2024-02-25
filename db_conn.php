<?php

$sname= "sql6.freesqldatabase.com";
$unmae= "sql6686623";
$password = "hN1Rai4miX";

$db_name = "sql6686623";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}