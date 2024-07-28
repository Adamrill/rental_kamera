<?php 
include "../../../koneksi.php";

$id_customer = $_GET['id_customer'];
$sql = "SELECT * FROM customer WHERE id_customer = $id_customer";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <form action="proses_edit.php" method="POST">
        <h1>Ubah Data</h1>
        <input type="hidden" name="id_customer" value="<?= $data['id_customer']; ?>">
        <label>Nama</label><br>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br><br>
        <label>No Hp</label><br>
        <input type="text" name="no_hp" value="<?= $data['no_hp']; ?>" required><br><br>
        <label>Alamat</label><br>
        <textarea name="alamat" cols="30" rows="10" required><?= $data['alamat']?></textarea><br><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>
