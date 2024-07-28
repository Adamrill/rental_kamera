<?php 
include "koneksi.php";

// ambil data dari form
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confirm = $_POST['confirm'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];


// dicek apakah pass = confirm
if ($pass != $confirm) {
    echo "<script>
    alert('password tidak sesuai!');
    document.location = 'sign_up.php';
    </script>";
    die; //proses dibawahnya tidak tereksekusi
}

// input data ke database
$sql = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', MD5('$pass'))";
$query = mysqli_query($koneksi, $sql);

$sql = "INSERT INTO customer (nama, no_hp, alamat) VALUES ('$username', '$no_hp','$alamat')";
$query = mysqli_query($koneksi, $sql);

// message localhost
if ($query) {
    echo "<script>
        alert('Sign Up success!');
        document.location = 'login.php';
        </script>";
} else {
    echo "<script>
        alert('Sign Up failed!');
        document.location = 'sign_up.php';
        </script>";
}



?>