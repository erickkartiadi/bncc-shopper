<?php

session_start();
session_destroy();
$path = "../view/index.php";
header("location: $path");
