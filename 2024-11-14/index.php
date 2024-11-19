<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "tokoku";

$koneksi = mysqli_connect($host, $user, $password, $database);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toko ku</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="images/bank mandiri.jpg" alt=""></a>
            </div>
            <div class="judul">
                <h2>tokoku</h2>
            </div>
            <div class="nav">
                <a href="?menu=cart">
                    <li>cart</li>
                </a>
                <a href="?menu=login">
                    <li>login</li>
                </a>
                <a href="?menu=logout">
                    <li>logout</li>
                </a>
                <a href="?menu=produk">
                    <li>produk</li>
                </a>
                <a href="?menu=register">
                    <li>register</li>
                </a>
            </div>
        </div>
        <div class="content">
            <?php
            if (isset($_GET['menu'])) {
                $menu = $_GET['menu'];
                if ($menu == 'cart') {
                    require_once('pages/cart.php');
                }
                if ($menu == 'login') {
                    require_once('pages/login.php');
                }
                if ($menu == 'logout') {
                    require_once('pages/logout.php');
                }
                if ($menu == 'produk') {
                    require_once('pages/produk.php');
                }
                if ($menu == 'register') {
                    require_once('pages/register.php');
                }
                
            } else {
                require_once('pages/produk.php');
            }
            ?>
        </div>
        <div class="fother">
            <p>web ini dibuat oleh kiky</p>
        </div>

    </div>

</body>

</html>