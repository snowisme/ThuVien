<?php

$conn = mysqli_connect("localhost", "root", "", "thuvien");

if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
}


define("root", __DIR__ ."/");
define("views", root."pages/");
$path_img = "images/sanpham/";

?>