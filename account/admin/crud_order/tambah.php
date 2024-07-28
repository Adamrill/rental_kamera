<?php 
include "../../../koneksi.php";
// session_start();
// if (!isset($_SESSION["login"])) {
//     echo "<script>
//     alert('anda belum login');
//     document.location = 'login.php';
//     </script>";
//     exit;
// }

$sql = "SELECT * FROM customer";
$sql2 = "SELECT * FROM kamera";
$query = mysqli_query($koneksi, $sql);
$query2 = mysqli_query($koneksi, $sql2);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
	<link rel="stylesheet" href="../../../bootstrap/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="container py-5 vh-100"><!--agar posisi form berada di tengah-->
<div class="row justify-content-center align-items-center h-100"><!--posisi form ditengah-->
<div class="card shadow border-0"><!--membuat bayangan-->
<div class="card-body p-5"><!--membuat garis tepi pada sekitar form-->
	<h1 class="text-center">TAMBAH SEWA </h1>
	<form action="proses_tambah.php" method="POST">
		<label>Id Customer</label>
		<select name="id_customer" class="table table-bordered">
			<?php while($data = mysqli_fetch_assoc($query)) : ?>
				<option><?= $data['id_customer'] ?></option>
			<?php endwhile;?>
		</select>
		<label>Id Kamera</label>
		<select name="id_kamera" class="table table-bordered">
			<?php while ($data2 = mysqli_fetch_assoc($query2)) : ?>
				<option><?= $data2['id_kamera'] ?></option>
			<?php endwhile;?>
		</select>
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