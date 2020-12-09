<?php
include("../../config/config.php");
session_start();

$shop_name = $_POST['name'];
$shop_location = $_POST['location'];


$f_folder = "../../images/";
$f_photo = "store.png";
$f_temp = "";
$is_image = false;

if ($_FILES['img']['size'] != 0) {
  $is_image = true;
  $f_temp = $_FILES['img']['tmp_name'];
  $f_photo = time() . "_" . $_FILES["img"]["name"];
}


$query = "INSERT INTO shop(name, location, user_id,image_url) VALUES ('$shop_name', '$shop_location', {$_SESSION['user_id']},'$f_folder$f_photo')";
echo $query;
if (mysqli_query($conn, $query)) {
  if ($is_image) {
    $s = move_uploaded_file($f_temp, $f_folder . $f_photo);
  }
  $path = "/index.php";
  header("location: $path");
} else {
  echo mysqli_error($conn);
}
