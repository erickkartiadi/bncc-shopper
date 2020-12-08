<?php
include("../../config/config.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$timestamp = date("Y-m-d H:i:s");

$query = "INSERT INTO user(first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";

if (mysqli_query($conn, $query)) {
  $path = "../view/login.php";
  header("location: $path");
} else {
  echo mysqli_error($conn);
}
