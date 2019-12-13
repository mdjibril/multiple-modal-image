<?php 
$con = mysqli_connect("localhost", "root", "", "imagemodal");

if (!$con) {
	die("Connection failed: " .mysqli_connect_error());
}
?>