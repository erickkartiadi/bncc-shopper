<?php

session_start();
session_destroy();
$path = "../../index.php";
header("location: $path");
