<?php
include "koneksi.php";

$data = $_GET['id_customer'];
$hapus = mysqli_query($koneksi, "DELETE FROM customer WHERE customer . id_customer = $data");


if($hapus)
{
    echo "<script>
        alert('Hapus data sukses');
        document.location = '../cus_dash.php';
        </script>";
}
else
{
    echo "<script>
        alert('Hapus data gagal');
        document.location = '../cus_dash.php';
        </script>";
}

?>
