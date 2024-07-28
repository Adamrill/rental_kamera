<?php
include "koneksi.php";

$data = $_GET['id_kamera'];
$hapus = mysqli_query($koneksi, "DELETE FROM kamera WHERE id_kamera = $data");


if($hapus)
{
    echo "<script>
        alert('Hapus data sukses');
        document.location = '../k_dash.php';
        </script>";
}
else
{
    echo "<script>
        alert('Hapus data gagal');
        document.location = '../k_dash.php';
        </script>";
}

?>
