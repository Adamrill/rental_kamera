<?php
include "../../../koneksi.php";

$data = $_GET['id_sewa'];
$hapus = mysqli_query($koneksi, "DELETE FROM sewa WHERE id_sewa = $data");


if($hapus)
{
    echo "<script>
        alert('Hapus data sukses');
        document.location = '../order.php';
        </script>";
}
else
{
    echo "<script>
        alert('Hapus data gagal');
        document.location = '../order.php';
        </script>";
}

?>
