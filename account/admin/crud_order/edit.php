<?php 
include "../../../koneksi.php";

$id_sewa = $_GET['id_sewa'];
$sql = "SELECT * FROM sewa WHERE id_sewa = $id_sewa";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

$sql_cus = "SELECT * FROM customer";
$query_cus = mysqli_query($koneksi, $sql_cus);

$sql_kam = "SELECT * FROM kamera";
$query_kam = mysqli_query($koneksi, $sql_kam);

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
        <input type="hidden" name="id_sewa" value="<?= $data['id_sewa']; ?>">
        <label>Id Customer</label><br>
        <select name="id_customer">
            <option value="<?= $data['id_customer']; ?>"><?= $data['id_customer'] ?></option>
            <?php while($cus = mysqli_fetch_assoc($query_cus)) : ?>
                <option><?= $cus['id_customer'] ?></option>
            <?php endwhile;?>
        </select><br>
        <label>Id Kamera</label><br>
        <select name="id_kamera">
            <option><?= $data['id_kamera'] ?></option>
            <?php while($kam = mysqli_fetch_assoc($query_kam)) : ?>
                <option><?= $kam['id_kamera'] ?></option>
            <?php endwhile;?>
        </select><br>
        <label>Tanggal Pinjam</label><br>
        <input type="date" name="tgl_pinjam" value="<?= $data['tgl_pinjam']?>"><br>
        <label>Tanggal Kembali</label><br>
        <input type="date" name="tgl_kembali" value="<?= $data['tgl_kembali']?>"><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>
