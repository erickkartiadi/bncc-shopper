<?php
include("../../config/config.php");

session_start();

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$shop_id = $_SESSION['shop_id'];

$f_folder = "../../images/";

$f_temp = $_FILES['img']['tmp_name'];
$f_photo = time() . "_" . $_FILES['img']["name"];

$query = "INSERT INTO product(name, price, description, image_url, shop_id) VALUES ('$name', '$price', '$description','$f_folder$f_photo', {$_SESSION['shop_id']})";


if (mysqli_query($conn, $query)) {
  $s = move_uploaded_file($f_temp, $f_folder . $f_photo);
  $path = "../view/shop.php?shop_id=$shop_id";
  header("location: $path");
} else {
  echo mysqli_error($conn);
}
