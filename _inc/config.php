<?php


//db pripojenie
$host = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$db = "anlee";

$conn = mysqli_connect($host, $dbUsername, $dbPassword, $db);
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}

//premenná class ol products
$url = basename($_SERVER['SCRIPT_NAME'], '.php');
if (strpos($url,'index') !== false){
	$olClass = 'index';
}else {
	$olClass = 'grid-container';
}
