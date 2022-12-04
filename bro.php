<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link rel="stylesheet" href="bro.css">
    <link rel="stylesheet" href="carousel.css">
</head>
<body>

    <center>
        <div id="container">
            <div class="banner1">
            <img id="ban1" class="img" src="images/slide_home/pocari1.jpg">
    <div class="textbox">
        <h1> pocari sweat kw<sub>2</sub> </h1>
    <a href="index.php" class="btn-glow">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Saya kepo.. </a>
    </div>
    </div>
    <div class="banner2">
        <img id="ban2" class="img" src="images/slide_home/pocari2.jpg">
    <div class="textbox">
        <h1> pocari sweat kw<sub>2</sub> </h1>
    <a href="index.php" class="btn-glow">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Saya kepo.. </a>

    </div>
    </div>
    <div class="banner3">
        <img id="ban3" class="img" src="images/slide_home/pocari3.jpg">
    <div class="textbox">
        <h1> pocari sweat kw<sub>2</sub> </h1>
    <a href="index.php" class="btn-glow">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Saya kepo.. </a>
    </div>
    </div>

</div>
</center>
<script>
            const bg = document.getElementById('container');
        window.addEventListener('scroll', function() {
            bg.style.backgroundSize = 160 - +window.pageYOffset/12+'%';
            bg.style.opacity = 1 - +window.pageYOffset/700+'';
            
        })
    </script>



<script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function() {
            navbar = document.querySelector(".nav-bar");
            navbar.classList.toggle("active");
        }
        </script>
</body>
</html>