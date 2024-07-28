<?php 
include "../../koneksi.php";

$sql = "SELECT * FROM kamera";
$query = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin</title>
    <link rel="stylesheet" href="../../css/k_dash.css">
</head>
<body>
    <!-- vertical-menu -->
    <div class="navbar">
        <div class="profile">
            <img src="../../img/fitur/profile.png">
            <span class="desc">
                <h3>Adam Nur Hidayat</h3>
                <h4>Admin</h4>
            </span>
        </div>
        <br>
        <div class="vertical-menu">
            <div class="menu_this satu">
                <a href="dashboard.php">
                    <img src="../../img/fitur/icons8-home-48.png">
                    <span class="links_name">Home</span>
                    <br><br>
                </a>
            </div>
            <div class="menu_this dua">
                <a href="order.php">
                    <img src="../../img/fitur/icons8-shopping-cart-30.png">
                    <span class="links_name">Order</span>
                    <br><br>
                </a>
            </div>
            <div class="menu_this tiga">
                <a href="cus_dash.php">
                    <img src="../../img/fitur/icons8-people-24.png">
                    <span class="links_name">Customer</span>
                    <br><br>
                </a>
            </div>
            <div class="menu_this empat">
                <a href="k_dash.php">
                    <img src="../../img/fitur/icons8-camera-24.png">
                    <span class="links_name">Camera</span>
                    <br><br>
                </a>
            </div>
            <div class="menu_this lima">
                <a href="logout.php">
                    <img src="../../img/fitur/icons8-logout-48.png">
                    <span class="links_name">Logout</span>
                    <br><br>
                </a>
            </div>
        </div>
    </div>
    <!-- content -->
    <div class="content">
        <table border="1" celpadding="30" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Merk</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no = 1;
            while($data = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><img src="../../img/kamera/<?= $data['gambar'] ?>"></td>
                <td><?= $data['merk'] ?></td>
                <td><?= $data['stok'] ?></td>
                <td><?= $data['harga'] ?></td>
                <td>
                    <a href='crud_k/edit.php?id_kamera="<?=$data['id_kamera']?>"'><button class="color one">Edit</button></a>
                    <a href='crud_k/hapus.php?id_kamera="<?=$data['id_kamera']?>"' onclick="return confirm('apakah anda ingin menghapus data ini?');"><button class="color two">Hapus</button></a>
                </td>
            </tr>
            <?php endwhile;?>
        </table>
        <a href="crud_k/tambah.php"><button class="tambah">Tambah</button></a>
    </div>
</body>
</html>