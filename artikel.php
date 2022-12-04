<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel | Pocari Sweat</title>
    <link rel="stylesheet" href="sea.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Ms+Madi&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <?php
    include 'nav.php';
    ?>
    <nav class="nav-bar">
            <ul>
                <li>
                    <a href="index.php" class="active">Home</a>
                </li>
                <li>
                    <a href="produk.php">Produk</a>
                </li>
                <li>
                    <a href="#">Apa yang baru?</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- HEADER -->
            <center>
                <div class="searchbox">
                    <div class="search"><ion-icon name="search-outline"></ion-icon></div>
                    <form class="searchinput">
                        <input type="text" placeholder="Search..">
                    <button type="submit"></button>
                </form>
                <div class="close"><ion-icon name="close-outline"></ion-icon></div>
            </div>
        </center>
        
    </div>
    <div class="news-headline">
    <p>ARTIKEL</p></div>
<div class="for-you">
    <div class="news">
        <img src="images/news/pelari.png">
        <div class="text">
            <h2>Latihan kekuatan untuk pelari</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quod quo voluptatum blanditiis voluptatem iusto inventore deserunt ratione harum quidem!</p>
            <p>by @admin |
            <hr>
        </div>
    </div>
    <div class="news">
        <img src="images/news/stavra.png">
        <div class="text">
            <h2>Latihan kekuatan untuk pelari</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quod quo voluptatum blanditiis voluptatem iusto inventore deserunt ratione harum quidem!</p>
                    <p>by @admin |
                        <hr>
        </div>
    </div>
    <div class="news">
        <img src="images/news/marathon.png">
        <div class="text">
            <h2>Latihan kekuatan untuk pelari</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quod quo voluptatum blanditiis voluptatem iusto inventore deserunt ratione harum quidem!</p>
            <p>by @admin |
                    <hr>
        </div>
    </div>
  
    
<!-- <footer>
    <div class="footer">
        <div class="footer-logo">
            <img class="footer-logo" src="images/footer/logo-footer.png">
        </div>
        <div class="footer-page">
            <ul>
                <li><a class="heading" href="#" id="">Our Product</a></li>
                <li><a href="#" id="">Artikel</a></li>
</ul>
        </div> -->
        <!-- <div class="footer-event">
            <ul>
                <li><a class="heading" href="#" id="">Events</a></li>
                <li><a href="#" id="">Pocari Sweat Sport Science</a></li>
                </ul>
            </div> -->
        <!-- <div class="footer-faq">
            <ul>
                <li><a class="heading" href="#" id="">FAQ</a></li>
                <li><a href="#" id="">Terms & Conditions</a></li>
                <li><a href="#" id="">Privacy Policy</a></li>
            </ul>
        </div>
            <div class="footer-sci">
                <p>Social media</p>
                <ul class="sci">
                    <li><a href="#" id=""><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#" id=""><i class="bi bi-instagram"></i></a></li>
                    <li><a href="#" id=""><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#" id=""><i class="bi bi-youtube"></i></a></li>
            </div>
    </div>
</footer>
<div class="ending">
    <p>© 2021-2022 PT. AMERTA INDAH OTSUKA All Rights Reserved</p>
</div>
    </div> -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    let search = document.querySelector('.search');
    let close = document.querySelector('.close');
    let searchbox = document.querySelector('.searchbox');
    let input = document.querySelector('input');
    search.onclick = function(){
        searchbox.classList.add('active');
        input.classList.add('active');
    }
    close.onclick = function(){
        searchbox.classList.remove('active');
        input.classList.remove('active');

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