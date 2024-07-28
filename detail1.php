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

$id_kamera = $_GET['id_kamera'];

$sql = "SELECT * FROM customer";
$query = mysqli_query($koneksi, $sql);

$nama = $_SESSION["login"];
$sql2 = "SELECT * FROM customer WHERE nama = '$nama'";
$result = mysqli_query($koneksi, $sql2);
$id_customer = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Tambah</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<div class="container py-5 vh-100">
			<!--agar posisi form berada di tengah-->
			<div class="row justify-content-center align-items-center h-100">
				<!--posisi form ditengah-->
				<div class="card shadow border-0">
					<!--membuat bayangan-->
					<div class="card-body p-5">
						<!--membuat garis tepi pada sekitar form-->
						<h1 class="text-center">TAMBAH SEWA </h1>
						<form action="proses_detail.php" method="POST">
							<label>Nama Customer</label>
							<input type="text" name="id_customer" value="<?= $nama; ?>" class="table table-bordered" readonly>
							<label>Id Kamera</label>
							<input type="number" name="id_kamera" value="<?= $id_kamera; ?>" class="table table-bordered" readonly><br>
							<label>Tanggal pinjam</label>
							<input type="date" name="tgl_pinjam" class="table table-bordered"><br>
							<label>Tanggal kembali</label>
							<input type="date" name="tgl_kembali" class="table table-bordered"><br>
							<button type="submit" name="submit" class="btn btn-outline-success">Simpan</button>



						</form>
					</div>
				</div>
</body>

</html>