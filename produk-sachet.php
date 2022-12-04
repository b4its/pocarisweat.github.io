<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sachet - Pocari Sweat</title>
    <link rel="stylesheet" href="sachet.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="  background: linear-gradient(0deg, rgba(9,0,170,1) 0%, rgba(48,32,181,1) 14%, rgba(0,52,255,1) 34%, rgba(255,255,255,1) 82%);">
    <?php
include 'nav.php';
?>
 <nav class="nav-bar">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="produk.php" class="active">Produk</a>
                </li>
                <li>
                    <a href="#">Artikel</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
                <li>
                    <a href="#">About us</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="berwarna"></div>
    <div class="produk">
        <div class="produk-main">
            <img src="images/pocari-product/pocari-sachet.png">
        </div>
        <div class="produk-head">
            <p class="produk-head"> SACHET</p>
        </div>
        <p class="produk-head2">15Gram</p>
        <p class="produk-text">Ingin bepergian? Tetap jaga hidrasimu dengan POCARI SWEAT Sachet 15 g. POCARI SWEAT Sachet 15 g ini merupakan kemasan praktis dan ekonomis, terutama saat traveling (hiking, trekking, haji atau berwisata). Saat traveling, bawaan barang kita pasti sudah banyak dan berat.</p>
    </div>
<div class="main-sci">
    <ul class="icon-sci">
        <li><a href="#"><img src="images/pocari-product/pocari-sachet.png"></li>
        <li><a href="#"><img src="images/pocari-product/pocari-kaleng.png"></li>
        <li><a href="#"><img src="images/pocari-product/pocari-botol.png"></li>
    <ul>
</div>
</div>
<script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function() {
            navbar = document.querySelector(".nav-bar");
            open = document.querySelector(".hamburger");
            open_ham = document.querySelector(".open");     
            navbar.classList.toggle("active");
            open.classList.toggle("close");
            open_ham.classList.toggle("active"); 

        }
        
        open_ham = document.querySelector(".open");
        open_ham.onclick = function() {
            navbar = document.querySelector(".nav-bar");
            open = document.querySelector(".hamburger");
            open_ham = document.querySelector(".open");     
            navbar.classList.toggle("active");
            open.classList.toggle("close");
            open_ham.classList.toggle("active"); 



        }
        </script>
</body>
</html>