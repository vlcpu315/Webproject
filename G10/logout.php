<?php

$servername = "localhost";
$username = "id1306901_g10";
$password = "Victor912";
$dbname = "id1306901_db_user";
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

session_start();
	//Unset the variables stored in session

	unset($_SESSION['user']);
	session_write_close();
	header("location: Forum.php");
	exit();
?>