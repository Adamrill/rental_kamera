<?php 
include "koneksi.php";

// cek tombol submit sudah ditekan
if(isset($_POST['submit'])) {
    // dapatkan data input
    $id_kamera = $_POST['id_kamera'];
    $merk = $_POST['merk'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    // dapatkan file gambar
    $gambar = $_FILES['gambar'];

    // ambil data pecahan gambar
    $gambarNama = $_FILES['gambar']['name'];
    $gambarTmpName = $_FILES['gambar']['tmp_name'];
    $gambarSize = $_FILES['gambar']['size'];
    $gambarError = $_FILES['gambar']['error'];
    $gambarType = $_FILES['gambar']['type'];

    // cek ekstention gambar
    // 1. pecah nama gambar
    $gambarExt = explode('.', $gambarNama); //pecah gambar ke array (adam.jpg = ['adam', 'jpg'] )
    // 2. ambil ekstensi gambar terakhir
    $gambarActExt = strtolower(end($gambarExt)); 
    //strtolower -> adam.JPG = adam.jpg
    // end = adam.gambar.jpg -> mengambil jpg
    $allowed = ['jpg', 'jpeg', 'png'];

    if (in_array($gambarActExt, $allowed)) { //cek apakah sesuai ekstensi 
        if ($gambarError === 0) { //cek bila pilih gambar
            if ($gambarSize < 20000000) { //cek ukuran file
                $gambarNameNew = uniqid('', true) . "." . $gambarActExt;
                $gambarDestination = 'htdocs\sewakamera2\img\kamera\a' . $gambarNameNew; //terduga error !important
                move_uploaded_file($gambarTmpName, $gambarDestination);
                $sql = "INSERT INTO kamera VALUES('$id_kamera', '$merk', '$stok', '$harga', '$gambarNameNew')";
                $query = mysqli_query($koneksi, $sql);
                if ($query) {
                    echo "<script>
                    alert('tambah data sukses');
                    document.location = '../k_dash.php';
                    </script>";
                } else {
                    echo "<script>
                    alert('tambah data gagal');
                    document.location = '../k_dash.php';
                    </script>";
                }
            } else {
                echo "<script>
                alert('ukuran gambar terlalu besar');
                document.location = '../k_dash.php';
                </script>";
            }
        } else {
            echo "<script>
            alert('pilih gambar terlebih dahulu');
            document.location = 'tambah.php';
            </script>";
        }
    } else {
        echo "<script>
        alert('kamu tidak bisa upload gambar ini!');
        document.location = 'tambah.php';
        </script>";
    }

}


?>