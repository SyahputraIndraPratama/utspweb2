<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "buku";
$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
	die("error in connection");
}

//echo "database connected"
?>