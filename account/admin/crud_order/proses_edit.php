<?php
include "../../../koneksi.php";
$id_sewa = $_POST['id_sewa'];
$id_kamera = $_POST['id_kamera'];
$id_customer = $_POST['id_customer'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];

$diff = date_diff(date_create($tgl_pinjam),date_create($tgl_kembali));
$hari = $diff->format("%a") +1;

$query = mysqli_query($koneksi, "SELECT*FROM kamera WHERE id_kamera = '$id_kamera'");

while($kamera = mysqli_fetch_assoc($query)){
    $tarif_sewa = $kamera['harga'];
}

$total_sewa = $hari*$tarif_sewa;

echo $total_sewa;

$query2 = mysqli_query($koneksi,"UPDATE sewa SET id_customer = '$id_customer',id_kamera= '$id_kamera',tgl_pinjam= '$tgl_pinjam', tgl_kembali='$tgl_kembali',total_sewa='$total_sewa' WHERE id_sewa = '$id_sewa'");

if($query2){
    header("location:../order.php?edit=berhasil");
}else{
    header("location:../order.php?edit=gagal");
}
?>