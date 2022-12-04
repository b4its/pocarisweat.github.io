<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
    <link rel="stylesheet" href="video.css">
</head>
<body>
    <div class="btn">
        <div class="play">
            </div>
            <p> Play Video </p>
    </div>
    <div class="clip">
        <video src="txt.mp4" controls></video>
    <b class="close">close</b>
    </div>
    <script>
        let btn = document.querySelector('.btn');
        let clip = document.querySelector('.clip');
        let close = document.querySelector('.close');
        let video = document.querySelector('video');
        btn.onclick = function(){
            btn.classList.add('active')
            clip.classList.add('active')
        video.play();
        video.currentTime= 0 ;
        }
        close.onclick = function(){
            btn.classList.remove('active')
            clip.classList.remove('active')
        }
    </script>
</body>
</html>