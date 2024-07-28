<?php
session_start();

$nama = $_SESSION['login'];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="p-3 mb-2 bg-info text-dark rounded">
            <h4>Info List Customer</h4>
        </div>
        <div class="row">
            <?php
            include("koneksi.php");
            $cari = mysqli_query($koneksi, "SELECT * FROM customer WHERE nama = '$nama'");
            ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No.Hp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($data = mysqli_fetch_array($cari)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['no_hp']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td>
                                <a href="?x=hcustomer&id=<?php echo $data['id_customer']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="?x=ecustomer&id=<?php echo $data['id_customer']; ?>" class="btn btn-warning">Ubah</a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <a href="?x=tcustomer" class="btn btn-primary">Tambah</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>