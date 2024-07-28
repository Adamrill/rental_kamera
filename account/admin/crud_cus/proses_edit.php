<?php 
include "koneksi.php";

$id_customer = $_POST['id_customer'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$sql = "UPDATE customer SET id_customer = '$id_customer', nama = '$nama', no_hp = '$no_hp', alamat = '$alamat' WHERE id_customer = '$id_customer'";

$result = mysqli_query($koneksi, $sql);

if ($result == true) {
    echo "<script>
    alert('ubah data sukses');
    document.location = '../cus_dash.php';
    </script>";
} else {
    echo "<script>
    alert('tambah data gagal');
    document.location = '../cus_dash.php';
    </script>";
}
?>