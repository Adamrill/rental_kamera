<?php
include "../../koneksi.php";

$sql = "SELECT * FROM sewa";
$query = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel sewa</title>
    <link rel="stylesheet" href="css/history.css">
</head>

<body>
    <div class="position">

        <h1>Data Sewa</h1>
        <div class="content">
            <table border="1" celpadding="30" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>ID Sewa</th>
                    <th>ID Customer</th>
                    <th>ID kamera</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Total Sewa</th>
                </tr>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['id_sewa'] ?></td>
                        <td><?= $data['id_customer'] ?></td>
                        <td><?= $data['id_kamera'] ?></td>
                        <td><?= $data['tgl_pinjam'] ?></td>
                        <td><?= $data['tgl_kembali'] ?></td>
                        <td><?= $data['total_sewa'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
        <a href="dashboard.php">Kembali</a>
    </div>
</body>

</html>