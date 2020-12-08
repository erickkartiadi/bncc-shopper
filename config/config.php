<?php
$host = "localhost";
$username = "root";
$password = "toor";
$database = "shopper";

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn->connect_error) {
  echo "Connection Error:  $conn->connect_error";
} else {
  // echo "Success connect to the database";
}
