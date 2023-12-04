<?php

$host= "localhost";
$user= "root";
$password = "root";

$db_name = "user";

$conn = mysqli_connect($host, $user, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
