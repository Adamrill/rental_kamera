<?php 
include "koneksi.php";

function tambah($data) {
    global $koneksi;

    $merk = htmlspecialchars($data['merk']);
    $stok = htmlspecialchars($data['stok']);
    $harga = htmlspecialchars($data['harga']);

    // upload gambar
    
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $sql = "INSERT INTO kamera VALUES('', '$merk', '$stok', '$harga', '$gambar')";
    $query = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

function upload() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah ada gambar yang diupload
    if($error == 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu');
        </script>";
    }

    // cek apakah gambar atau bukan
    $ekstensValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile); //pecah gambar contoh adam.jpg -> ['adam', 'jpg']
    $ekstensiGambar = strtolower(end($ekstensiGambar)); //ambil nama terakhir (end), ubah ke huruf kecil (strtolower)
    if(!in_array($ekstensiGambar, $ekstensValid)) {
        echo "<script>
        alert('yang anda upload bukan gambar');
        document.location = 'tambah.php';
        </script>";
        die;
    }

    // cek jika ukuran file terlalu besar
    if($ukuranFile > 10000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar');
        document.location = 'tambah.php';
        </script>";
        return false;
    }

    // lolos pengecekan gambar siap upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'C:/xampp/htdocs/sewakamera3/img/kamera/' . $namaFileBaru);
    return $namaFileBaru;
}

function ubah($data) {
    global $koneksi;

    $id_kamera = htmlspecialchars($data['id_kamera']);
    $merk = htmlspecialchars($data['merk']);
    $stok = htmlspecialchars($data['stok']);
    $harga = htmlspecialchars($data['harga']);
    $gambarLama = htmlspecialchars($data['gambarLama']);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    $edit = "UPDATE kamera SET 
        id_kamera = '$id_kamera',
        merk = '$merk',
        stok = '$stok',
        harga = '$harga',
        gambar = '$gambar'
        WHERE id_kamera = '$id_kamera'";
    $save = mysqli_query($koneksi, $edit);
    return mysqli_affected_rows($koneksi);
}
