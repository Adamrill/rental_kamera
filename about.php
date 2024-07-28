<?php 
include "koneksi.php";
session_start();
if (!isset($_SESSION["login"])) {
    echo "<script>
    alert('anda belum login');
    document.location = 'login.php';
    </script>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    <!-- navbar -->
    <div class="navbar">
        <img src="img/fitur/icon1.png" class="logo">
        <nav>
            <ul id="menuList">
                <li><a href="index.php">Home</a></li>
                <li><a href="kamera1.php">Kamera</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="login.php"><button>Login</button></a></li>
                <li><a href="sign_up.php"><button>Sign Up</button></a></li>
            </ul>
        </nav>
    </div>
    <!-- content -->
    <div class="content">
        <h2>Tentang Kami</h2>
        <p>Website ini berisi tentang penyewaan kamera. Harganya juga bervariasi mulai dari 140k - 350k. disertai dengan 1 baterai cadangan, sehingga membuat anda nyaman saat menggunakan kamera. diharapkan dengan adanya website ini pengguna dapat memesan online via website.</p>
    </div>
    <!-- footer -->
    <div class="footer">
        <p>Copyright 2022 By &copy;Mycam. All right reserved.</p>
    </div>
</body>
</html>