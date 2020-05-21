<?php
$host = "localhost";
$db = "cms";
$user = "cms_user";
$pass = "userpass";

$conn = mysqli_connect($host, $user, $pass, $db) or exit("Unable to connect to database: " . mysqli_connect_error());
?>
