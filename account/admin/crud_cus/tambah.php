<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Customer</title>
    <link rel="stylesheet" href="css/tambah.css">
</head>
<body>
    <form action="proses_tambah.php" method="POST">
        <h1>Tambah Data</h1>
        <input type="hidden" name="id_customer">
        <label>Nama</label><br>
        <input type="text" name="nama" placeholder="Masukkan nama"><br><br>
        <label>No Hp</label><br>
        <input type="text" name="no_hp" placeholder="08123456789"><br><br>
        <label>Alamat</label><br>
        <textarea name="alamat" cols="30" rows="10" placeholder="Masukkan Alamat"></textarea><br><br>
        <button name="submit">Simpan</button>
    </form>
</body>
</html>