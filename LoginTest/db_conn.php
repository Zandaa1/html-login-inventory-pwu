<?php

$sname= "sql106.unaux.com";
$unmae= "unaux_33421222";
$password = "pcgqpzscpesljv";

$db_name = "unaux_33421222_database";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}