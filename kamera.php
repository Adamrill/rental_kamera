<?php 
include "koneksi.php";
$sql = "SELECT * FROM kamera";
$query = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamera | Sewa disini</title>
    <link rel="stylesheet" href="css/kamera.css">
</head>
<body>
    <!-- navbar -->
    <div class="navbar">
            <img src="img/fitur/icon1.png" class="logo">
            <nav>
                <ul id="menuList">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="kamera.php">Kamera</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="login.php"><button>Login</button></a></li>
                    <li><a href="sign_up.php"><button>Sign Up</button></a></li>
                </ul>
            </nav>
    </div>
    <!-- content -->
    <div class="content">
        <h1>Sewa Sekarang</h1>
        <div class="position">
            <?php while ($data = mysqli_fetch_assoc($query)) : ?>
            <div class="item">
                <div class="item-box">
                        <a href="detail.php">
                            <img src="img/kamera/<?= $data['gambar']; ?>">
                            <div class="desc">
                                <h3><?= $data['merk']; ?></h3>
                                <h4><?= $data['harga']; ?>/day</h4>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
    </div>
</body>
</html>