<?php
include "koneksi.php";
session_start();

$sql = "SELECT * FROM kamera";
$query = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamera | Sewa Disini</title>
    <link rel="stylesheet" href="css/kamera1.css">
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
                <?php if (!isset($_SESSION['login'])) : ?>
                    <li><a href="login.php"><button>Login</button></a></li>
                    <li><a href="sign_up.php"><button>Sign Up</button></a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
    <!-- content -->
    <div class="content">
        <h1>Sewa Sekarang</h1>
        <form action="detail1.php" method="POST">
            <?php while ($data = mysqli_fetch_assoc($query)) : ?>
                <div class="item">
                    <input type="image" src="img/kamera/<?= $data['gambar'] ?>" name="gambar">
                    <input type="submit" name="merk" value="<?= $data['merk'] ?>" class="text">
                    <input type="submit" name="harga" value="<?= $data['harga'] ?>/hari" class="text dua">
                    <a href="detail1.php?id_kamera=<?= $data['id_kamera'] ?>">Sewa Sekarang</a>
                </div>
            <?php endwhile; ?>
        </form>
    </div>
    <!-- footer -->
    <div class="footer">
        <p>Copyright 2022 By &copy;Mycam. All right reserved.</p>
    </div>
</body>

</html>