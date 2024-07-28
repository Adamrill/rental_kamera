<?php 
// koneksi database
include "koneksi.php";

// ambil data dari database
$sql = "SELECT * FROM kamera";
$query = mysqli_query($koneksi, $sql);

// while ($data = mysqli_fetch_array($query)) {
//     var_dump($data);
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Kamera</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Tipe Kamera</th>
            <th>Stok</th>
            <th>Harga Sewa</th>
            <th>Aksi</th>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?= $data['id_kamera']; ?></td>
            <td><img src="img/kamera/<?= $data['gambar']; ?>" width="50"></td>
            <td><?= $data['merk']; ?></td>
            <td><?= $data['stok']; ?></td>
            <td><?= $data['harga']; ?></td>
            <td>
                <a href="">Edit</a> |
                <a href="">Hapus</a>
            </td>
        </tr>
        <?php endwhile;?>
    </table>
</body>
</html>