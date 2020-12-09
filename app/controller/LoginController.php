<?php
include("../../config/config.php");

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE email='$email' AND password = '$password'";

$user = mysqli_query($conn, $query);
$check = mysqli_num_rows($user);

$data = mysqli_fetch_array($user);

if ($check > 0) {
  session_start();
  $_SESSION['user_id'] = $data['id'];
  $_SESSION['full_name'] = $data['first_name'] . " " . $data['last_name'];
  $_SESSION['status'] = "login";
  $path = "/index.php";
  header("location: $path");
} else {
  echo "Invalid email or password!";
}
