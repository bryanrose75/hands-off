<?php
ob_start();
session_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("us-cdbr-east-02.cleardb.com", "b1af505282471d", "ac3d484c", "heroku_0096838f3d2d118");

if (mysqli_connect_errno()) {
	echo "Failed to connect: " . mysqli_connect_errno();
}
