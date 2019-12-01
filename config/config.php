<?php
ob_start();

session_start();
$timezone = date_default_timezone_set("America/Chicago");
$host = "localhost";
$database = "sharing";
$user = "root";
$pass = "";

$connection = mysqli_connect($host, $user, $pass, $database);
if(mysqli_connect_errno()) {
  echo "Failed to connect: " . mysqli_connect_errno();
}

?>
