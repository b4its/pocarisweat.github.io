<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk | Pocari Sweat</title>
<link rel="stylesheet" href="produk.css">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Ms+Madi&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
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
        <section>
        <div class="circle"></div>
<div class="content">
            <div class="textbox">
                <p>POCARI SWEAT<br>
                    THE ION<br>
                    SUPPLY DRINK</p>
                <div class="btn-produk">    
                    <a href="#">Kenapa kamu butuh pocari sweat? </a>
                    <a href="#">Kapan kamu butuh pocari sweat? </a>
                    <a href="#">Apa itu ion? </a>
                </div>
            </div>
            <a href="#" class="imgbox">
                <img src="images/pocari.png" class="pocari">
</a>
        </div>
        <center>
        <ul class="thumb">
            <li><img src="images/pocari-product/pocari-sachet.png" onclick="imgslider('images/pocari-product/pocari-sachet.png');changecirclecolor('#00abc9')"></li>
            <li><img src="images/pocari-product/pocari-kaleng.png" onclick="imgslider('images/pocari-product/pocari-kaleng.png');changecirclecolor('#00abc9')"></li>
            <li><img src="images/pocari-product/pocari-botol.png" onclick="imgslider('images/pocari-product/pocari-botols.png');changecirclecolor('#00abc9')"></li>
        </ul>
</center>
        <ul class="sci">
            <li> <a href="#"><img src="images/icon/facebook.png"></a></li>
            <li> <a href="#"><img src="images/icon/instagram.png"></a></li>
            <li> <a href="#"><img src="images/icon/twitter.png"></a></li>
            
    </section>
    <script>
        function imgslider(anything){
            document.querySelector('.pocari').src = anything; 
        }

        function changecirclecolor(color){
            const circle = document.querySelector('.circle');
            circle.style.background = color;
        }
        </script>
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