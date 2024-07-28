<?php 
if (isset($_POST['submit'])) {
    include "../../../koneksi.php";
    
    $id_customer = $_POST['id_customer'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    
    $sql = "INSERT INTO customer VALUES('$id_customer','$nama','$no_hp','$alamat')";
    
    $query = mysqli_query($koneksi, $sql);
    
    if ($query) {
        echo "<script>
        alert('tambah data sukses');
        document.location = '../cus_dash.php';
        </script>";
    } else {
        echo "<script>
            alert('tambah data gagal');
            document.location = '../cus_dash.php';
            </script>";
    }
}

?>