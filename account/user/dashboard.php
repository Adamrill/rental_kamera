<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="hero">
        <nav>
            <img src="../../img/fitur/icon1.png" class="logo" width="40">
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../../kamera1.php">Kamera</a></li>
                <li><a href="../../about.php">About</a></li>
            </ul>
            <img src="../../img/fitur/profile.png" class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="../../img/fitur/profile.png" width="50">
                        <h3><?= $_SESSION['login'] ?></h3>
                    </div>
                    <hr>
                    <a href="history.php" class="sub-menu-link">
                        <img src="../../img/fitur/icons8-history-24.png">
                        <p>History Order</p>
                        <span>></span>
                    </a>
                    <a href="logout.php" class="sub-menu-link">
                        <img src="../../img/fitur/logout32.png" width="50">
                        <p>Logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- content -->
    <div class="content">
        <div class="row">
                <div class="col-1">
                    <h2>Selamat Datang <br>di MyCam1</h2>
                    <h3>Menyediakan jasa sewa beragam kamera.</h3>
                    <p>Bisa sewa kamera dengan harga terjangkau lho.</p>
                    <a href="../../kamera1.php">
                        <button type="button">Sewa Sekarang <img src="../../img/fitur/arrow.png" alt=""></button>
                    </a>
                </div>
                <div class="col-2">
                    <img src="../../img/kamera/canon7d.png" class="kamera">
                    <div class="color-box"></div>
                </div>
        </div>
            <div class="sosmed">
                <a href="https://facebook.com">
                    <img src="../../img/medsos/fb.png">
                </a>
                <a href="https://instagram.com">
                    <img src="../../img/medsos/ig.png">
                </a>
                <a href="https://twitter.com">
                    <img src="../../img/medsos/tw.png">
                </a>
            </div>
    </div>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
        var menuList = document.getElementsById("menuList");

            menuList.style.maxHeight = "0px";

            function togglemenu(){
                if(menuList.style.maxHeight == "0px")
                    {
                        menuList.style.maxHeight = "130px";
                    }
                else
                    {
                        menuList.style.maxHeight = "0px";
                    }
            }
    </script>
</body>
</html>