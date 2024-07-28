<?php
include "koneksi.php";
require "functions.php";

// ambil data dari url
$id_kamera = $_GET['id_kamera'];

// tulis data di input form
$sql = "SELECT * FROM kamera WHERE id_kamera = $id_kamera";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

// cek tombol submit sudah ditekan
if (isset($_POST['submit'])) {
    // cek data berhasil diedit
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('data berhasil diubah');
        document.location = '../k_dash.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diubah');
        document.location = '../k_dash.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="css/edit.css">
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Edit Data</h1>
        <input type="hidden" name="id_kamera" value="<?= $data['id_kamera'] ?>">
        <input type="hidden" name="gambarLama" value="<?= $data['gambar'] ?>">
        <label>Merk</label><br>
        <input type="text" name="merk" value="<?= $data['merk'] ?>"><br>
        <label>Stok</label><br>
        <input type="text" name="stok" value="<?= $data['stok'] ?>"><br>
        <label>Harga</label><br>
        <input type="text" name="harga" value="<?= $data['harga'] ?>"><br>
        <label>Gambar</label><br>
        <img src="../../../img/kamera/<?= $data['gambar'] ?>" width="60" class="gambar"><br>
        <input type="file" name="gambar"><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>

</html>