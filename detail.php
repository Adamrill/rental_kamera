<?php 
// include "koneksi.php";
// session_start();
// if (!isset($_SESSION["login"])) {
//     echo "<script>
//     alert('anda belum login');
//     document.location = 'login.php';
//     </script>";
//     exit;
// }

$id_kamera = $_GET['id_kamera'];
// database kamera
$sql = "SELECT * FROM kamera WHERE id_kamera = '$id_kamera'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
// database customer
$sql2 = "SELECT * FROM customer";
$query2 = mysqli_query($koneksi, $sql2);
$data2 = mysqli_fetch_assoc($query2);
// database sewa
$sql3 = "SELECT * FROM sewa";
$query3 = mysqli_query($koneksi, $sql3);
$data3 = mysqli_fetch_assoc($query3);

// hitung total sewa
// $id_sewa = $_POST['id_sewa'];
// $id_kamera = $_POST['id_kamera'];
// $id_customer = $_POST['id_customer'];
// $tgl_pinjam = $_POST['tgl_pinjam'];
// $tgl_kembali = $_POST['tgl_kembali'];

// $diff = date_diff(date_create($tgl_pinjam), date_create($tgl_kembali));
// $hari = $diff->format("%a") +1;

// $result = mysqli_query($koneksi, "SELECT * FROM kamera WHERE id_kamera = '$id_kamera'");

// while ($kamera = mysqli_fetch_assoc($result)) {
//     $total_sewa = $kamera['harga'];
// }

// $total_sewa = $hari*$total_sewa;
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Halaman Checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Open+Sans:400,600'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
<link rel="stylesheet" href="css/detail.css">

</head>
<body>
<!-- partial:index.partial.html -->
<header>
    <div class="container">
    <div class="navigation">

    <div class="logo">
        <i class="icon icon-basket"></i>Mycam</div>
    <div class="secure">
        <i class="icon icon-shield"></i>
        <span>Secure Checkout</span>
    </div>
    </div>
        <div class="notification">
        Complete Your Purchase
        </div>
    </div>
</header>
    <section class="content">

    <div class="container">

    </div>
    <div class="details shadow">
        <div class="details__item">

        <div class="item__image">
            <img class="iphone" src="img/kamera/<?= $data['gambar']?>">
        </div>
        <div class="item__details">
        <div class="item__title">
            <?= $data['merk']?>
        </div>
        <div class="item__price" id="harga">
            IDR <?= number_format($data['harga'],2,',','.')?>
        </div>
        <div class="item__quantity">
            Stok : <?= $data['stok'] ?>
        </div>
        <div class="item__description">
        <ul>
            <li>Super cepat dan efisien</li>
            <li>Memiliki baterai yang tahan lama</li>
            <li>Kamera Beresolusi Tinggi</li>
            <li>Harga terjangkau kualitas memukau</li>
            <li>Mudah dibawa</li>
        </ul>

        </div>

        </div>
    </div>

    </div>
    <div class="discount"></div>

    <div class="container">
        <div class="payment">
            <!-- <div class="payment__title">
            Payment Method
            </div>
        <div class="payment__types">
            <div class="payment__type payment__type--cc active">
            <i class="icon icon-credit-card"></i>Credit Card</div>
        <div class="payment__type payment__type--paypal">
            <i class="icon icon-paypal"></i>Paypal</div>
        <div class="payment__type payment__type--paypal">
            <i class="icon icon-wallet"></i>SEPA</div>
        <div class="payment__type payment__type--paypal">
            <i class="icon icon-note"></i>Invoice</div>
        </div> -->

        <div class="payment__info">
            <div class="payment__cc">
            <div class="payment__title">
                <i class="icon icon-user"></i>Informasi Pribadi
            </div>
            <form action="" method="POST">
                <div class="form__cc">
                    <input type="hidden" name="id_sewa">
                <div class="row">
                    <div class="field">
                    <div class="title">Nama Customer
                    </div>
                    <select name="nama" class="input opt">
                        <?php while($data2 = mysqli_fetch_assoc($query2)) : ?>
                        <option><?= $data2['nama'] ?></option>
                        <?php endwhile;?>
                    </select>
                    </div>
                </div>
                <div class="row">
                    <div class="field small">
                        <div class="title">Tanggal Pinjam <br>
                        <input type="date" name="tgl_pinjam" class="date" id="tgl_pinjam" onkeyup="sum();">
                        </div>
                        <div class="title">Tanggal Kembali <br>
                        <input type="date" name="tgl_kembali" class="date" id="tgl_kembali" onkeyup="sum();">
                        </div>
                    </div>
                    <!-- <div class="field small">
                    <div class="title">CVV Code
                        <span class="numberCircle">?</span>
                    </div>
                    <input type="text" class="input txt" />
                    </div> -->
                </div>
                <div class="row">
                    <div class="field">
                    <div class="title">Total Sewa
                    </div>
                    <input type="text" name="total_sewa" class="input txt" value="IDR <?= number_format($data['harga'],2,',','.')?>" id="total_sewa" readonly="readonly" onkeyup="sum();">
                    </div>
                </div>

            </div>
            </form>
            </div>
            <div class="payment__shipping">
            <div class="payment__title">
                <i class="icon icon-user"></i> Detail Customer
            </div>
            <div class="details__user"> 
                <?php if(isset($_POST['nama'])) : ?>
                <div class="user__name"><?= $data2['nama'] ?>
                <br> <?= $data2['no_hp'] ?></div>
                <div class="user__address"><?= $data2['alamat'] ?>
                <br>Indonesia</div>
                <?php endif;?>
            </div>

        </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="actions">

        <a href="#" class="btn action__submit">Place your Order
            <i class="icon icon-arrow-right-circle"></i>
        </a>
        <a href="kamera1.php" class="backBtn">Go Back to Shop</a>

    </div>
    </section>
    </div>
    
<!-- partial -->

    <script type="text/javascript">
        

        function sum() {
            // atur dua tanggal jadi dua variabel
            var date1 = document.getElementById("tgl_pinjam").value;
            var date2 = document.getElementById("tgl_kembali").value;

            // hitung perbedaan waktu dari dua tanggal
            var Differents_in_Time = date2 - date1;

            // hitung jumlah hari antara dua tanggal
            var Differents_in_Days = Differents_in_Time / (1000 * 3600 * 24);

            // hitung total sewa
            var harga = document.getElementById("harga").value;
            var result = parseInt(harga) * parseInt(Differents_in_Days);
            if (!isNaN(result)) {
                document.getElementById("total_sewa").value = result;
            }
        }
    </script>
    
</body>
</html>
