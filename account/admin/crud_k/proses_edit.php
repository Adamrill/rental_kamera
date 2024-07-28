<?php 
require "functions.php";

// ambil data dari url
$id_kamera = $_GET['id_kamera'];
var_dump($id_kamera);

// cek tombol submit sudah ditekan
if(isset($_POST['submit'])) {
    // cek data berhasil diedit
    if(ubah($_POST) > 0) {
        echo "<script>
        alert('data berhasil diubah');
        document.location = '../k_dash.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diubah');
        document.location = '../k_dash.php';
        </script>";
    }
}

?>