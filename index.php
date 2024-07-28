<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Home | Mycam</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="img/fitur/icon1.png" class="logo">
            <nav>
                <ul id="menuList">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="kamera1.php">Kamera</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="login.php"><button class="block">Login</button></a></li>
                    <li><a href="sign_up.php"><button class="block">Sign Up</button></a></li>
                </ul>
            </nav>
            <img src="img/icons8-menu-rounded-50.png" class="menu-icon" onclick="togglemenu()">
        </div>

        <div class="row">
            <div class="col-1">
                <h2>Selamat Datang <br>di MyCam</h2>
                <h3>Menyediakan jasa sewa beragam kamera.</h3>
                <p>Bisa sewa kamera dengan harga terjangkau lho.</p>
                <a href="kamera1.php">
                    <button type="button">Sewa Sekarang <img src="img/fitur/arrow.png" alt=""></button>
                </a>
            </div>
            <div class="col-2">
                <img src="img/kamera/canon7d.png" class="kamera">
                <div class="color-box"></div>
            </div>
        </div>
        <div class="sosmed">
            <a href="https://facebook.com">
                <img src="img/medsos/fb.png">
            </a>
            <a href="https://instagram.com">
                <img src="img/medsos/ig.png">
            </a>
            <a href="https://twitter.com">
                <img src="img/medsos/tw.png">
            </a>
        </div>

    </div>
    <script>
        var menuList = document.getElementsById("menuList");

        menuList.style.maxHeight = "0px";

        function togglemenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "130px";
            } else {
                menuList.style.maxHeight = "0px";
            }
        }
    </script>
</body>

</html>