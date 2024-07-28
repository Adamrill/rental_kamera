<?php 
$server = "localhost";
$username = "root";
$pass = "";
$database = "sewa_kamera";

$koneksi = mysqli_connect($server, $username, $pass, $database) or die(mysqli_error($koneksi));
?>