<?php 
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST['submit'])) {

    // cek apakah data berhasil ditambahkan
    if(tambah($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location = '../k_dash.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan');
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
    <title>Tambah Data</title>
    <link rel="stylesheet" href="css/tambah.css">
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data"> <!--kosong-->
        <h1>Tambah Data</h1>
        <input type="hidden" name="id_kamera">
        <label>Merk</label><br>
        <input type="text" name="merk" required><br>
        <label>Stok</label><br>
        <input type="text" name="stok" required><br>
        <label>Harga</label><br>
        <input type="text" name="harga" required><br>
        <label>Gambar</label><br>
        <input type="file" name="gambar" placeholder="Upload image" required><br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>