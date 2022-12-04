<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search - poca</title>
    <link rel="stylesheet" href="search.css">
</head>
<body>
    <div class="searchbox">
        <div class="search"><ion-icon name="search-outline"></ion-icon></div>
        <form class="searchinput">
            <input type="text" placeholder="Search..">
            <button type="submit"></button>
</form>
        <div class="close"><ion-icon name="close-outline"></ion-icon></div>
    
    </div>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    let search = document.querySelector('.search');
    let close = document.querySelector('.close');
    let searchbox = document.querySelector('.searchbox');
    search.onclick = function(){
        searchbox.classList.add('active');
    }
    close.onclick = function(){
        searchbox.classList.remove('active');
    }
</script>
</body>
</html>