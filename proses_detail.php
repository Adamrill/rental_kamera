<?php 
include "koneksi.php";

$id_kamera = $_POST['id_kamera'];
$id_customer = $_POST['id_customer'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];

$sql = "INSERT INTO sewa VALUES ('', '$id_customer', '$id_kamera', '$tgl_pinjam', '$tgl_kembali', '$total_sewa')";

$diff = date_diff(date_create($tgl_pinjam), date_create($tgl_kembali));
$hari = $diff->format("%a") +1;

$result = mysqli_query($koneksi, "SELECT * FROM kamera WHERE id_kamera = '$id_kamera'");

while ($kamera = mysqli_fetch_assoc($result)) {
    $tarif_sewa = $kamera['harga'];
}

$total_sewa = $hari*$tarif_sewa;

echo $total_sewa;

$query2 = mysqli_query($koneksi,"INSERT INTO sewa VALUES ('', '$id_customer', '$id_kamera', '$tgl_pinjam', '$tgl_kembali', '$total_sewa')");

if($query2){
    header("location:account/user/history.php?tambah=berhasil");
}else{
    header("location:test.php?tambah=gagal");
}
?>