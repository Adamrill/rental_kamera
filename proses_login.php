<?php
include "koneksi.php";
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");

if (mysqli_num_rows($query) > 0) {
    if ($username == "adam") {
        // cek session
        header('location:account/admin/dashboard.php?login=ok');
        $_SESSION["login"] = $username;
    } else {
        header('location:account/user/dashboard.php?login=ok');
        $_SESSION["login"] = $username;
    }
} else {
    echo "<script>
        alert('Login gagal!');
        document.location = 'login.php';
        </script>";
}
