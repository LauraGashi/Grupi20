<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="video.css">
   
    <title>Document</title>
    <style> 
        @font-face {
          font-family: myFirstFont;
          src: url(sansation_light.woff);
        }
        
        @font-face {
          font-family: myFirstFont;
          src: url(sansation_bold.woff);
          font-weight: bold;
        }
        
        div {
          font-family: myFirstFont;
        }

 
      
        </style>

    <script>
        function clickCounter() {
          if (typeof(Storage) !== "undefined") {
            if (sessionStorage.clickcount) {
              sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
            } else {
              sessionStorage.clickcount = 1;
            }
            document.getElementById("result").innerHTML = "You have clicked the button " + sessionStorage.clickcount + " time(s) in this session.";
          } else {
            document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
          }
        }
        </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $(".btn1").click(function(){
            $("#h1").hide();
        });
        $(".btn2").click(function(){
            $("#h1").show();
        });
        });
        </script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
    $(document).ready(function(){
    $("#h1").click(function(){
        $("#panel").slideToggle("slow");
    });
    });
</script>
<style> 
    #panel, #h1 {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
    }

    #panel {
    padding: 10px;
    display: none;
    }
</style>
</head>
<body >
    <script>document.body.style.backgroundColor="white";
        let color = ["#AAB7B8", "#616A6B", "#5D6D7E", "#34495E"];
        let i=0;
        let changeColor =() =>
        {
            document.body.style.backgroundColor = color[i];
            if (i == (color.length))
            {
                i=0;
            }
            i++;
        }
        setInterval(changeColor, 1000);
    </script>
    <?php
        $array1=array('Follow','steps','to','wash','hands');

        $str1=implode(" ", $array1);
        echo $str1;
    ?>
        <div id="panel">Be careful</div>
        <button class="btn1" style="width: 65px; height: 30px; margin-left: 5px;">Hide</button>
        <button class="btn2" style="width: 65px; height: 30px; margin-left: 5px;">Show</button>
        <div class="soap" style="height: 250px; margin-top: 100px;">
            <li>
                <img src="Imazhet/hand-a.png" style="width: 200px; height: 200px; border-radius: 50%;">
                <h2>Soap on Hands</h2>
                <?php
                    echo str_replace("Hands","hands.","Soap on Hands");
                ?>
            </li>
            <li>
                <img src="Imazhet/hand-b.png" style="width: 200px; height: 200px; border-radius: 50%;">
                <h2>Palm to Palm</h2>
            </li>
            <li>
                <img src="Imazhet/hand-c.png" style="width: 200px; height: 200px; border-radius: 50%;">
                <h2>Between Fingers</h2>
            </li>
            <li>
                <img src="Imazhet/hand-d.png" style="width: 200px; height: 200px; border-radius: 50%;">
                <h2>Back to Hands</h2>
            </li>
            <li>
                <img src="Imazhet/hand-e.png" style="width: 200px; height: 200px; border-radius: 50%;">
                <h2>Clean with Water</h2>
            </li>
            <li>
                <img src="Imazhet/hand-f.png" style="width: 200px; height: 200px; border-radius: 50%;">
                <h2>Focus on Wrist</h2>
            </li>
        </div>

        <div class="container">
            <?php
                $str="COVID-19 Tips and Tricks.";
                print_r (explode(".",$str));         
            ?>
        
        <div class="row">
            <div class="col">
              <div class="feature-img">
                  <img onclick="clickCounter()" src="Imazhet/137576875_10158175701292582_8767847500487272840_o.png" width="120%">
              <img src="Imazhet/play.png" class="play-btn" 
              onclick="playVideo('Recognizing Day to Day Signs and Symptoms of Coronavirus.mp4')">
              <div id="result"></div>
                </div>
            </div>
            <div class="col">
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="Imazhet/wash-your-hands-vector-illustration-hand-drawing-hand-washing-drawing-cartoon-style-personal-hygiene-wash-your-hands-vector-176739130.jpg">
                        <img src="Imazhet/play.png" class="play-btn" 
                        onclick="playVideo('Coronavirus How to wash your hands.mp4')">
                    </div>
                    <p style="color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">To prevent the spread of germs, including COVID-19,washing hands with soap.</p>
                </div>
    
                <div class="col">
                    <div class="small-img-row">
                        <div class="small-img">
                            <img src="Imazhet/wearmask.png">
                            <img src="Imazhet/play.png" class="play-btn"
                            onclick="playVideo('I wear a mask because - English (143).mp4')">
                        </div>
                        <p style="color: rgb(219, 84, 106); text-shadow: -1px 0 black, 0 2px black, 1px 0 black, 0 -1px black;">Wear masks in public settings.</p>
                    </div>
                    <div class="col">
                        <div class="small-img-row">
                            <div class="small-img">
                                <img src="Imazhet/keepdistance.jpg">
                                <img src="Imazhet/play.png" class="play-btn" class="play-btn"
                                onclick="playVideo('Keep Your Distance.mp4')">
                            </div>
                            <p>Stop the spread of coronavirus by keeping your distance</p>
                        </div>
            </div> 
            </div>
        </div>
    
        <div class="video-player" id="videoPlayer">
    <video width="100%" controls autoplay id="myVideo">
        <source src="Imazhet/Recognizing Day to Day Signs and Symptoms of Coronavirus.mp4" type="video/mp4">
    </video>
    <img src="Imazhet/wrong_delete_close_sign_cancel_reject_remove_-512.png" class="close-btn" onclick="stopVideo()">
        </div>
     <!--shtojme click event ne close button/therrasim funksionin stopVideo()-->
    <!--pasi e bonem te video display none atehere e shtojme ne script edhe click event -->
     <script>
        var videoPlayer=document.getElementById("videoPlayer");
        var myVideo=document.getElementById("myVideo");
        function stopVideo(){
            videoPlayer.style.display="none";
            myVideo.pause();
            media.currentTime = 0;
        }
    
        function playVideo(file){
            myVideo.src=file;
            videoPlayer.style.display="block";
        }
    
     </script>


<div class="cup">
  <div class="remained" id="remained">
    <span id="liters"></span>
    <small>Remained</small>
  </div>

  <div class="percentage" id="percentage"></div>
</div>
</body>
</html>
