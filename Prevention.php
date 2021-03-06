<?php
  if(isset($_POST['submit'])){

  $email= $_POST['email'];
  $regex=' /^([a-zA-Z0-9\.] + @ + [a-zA-Z]+(\.)+[a-zA-Z]{2-3})$/';

      if(preg_match($regex,$email)){
          echo "Valid email.";
      }
     else {
      echo "Invalid email.";
         }
    


  }

?>

<!DOCTYPE html>
<html lang="en" manifest="demo.appcache">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevention</title>
    <link rel="stylesheet" href="Prevention_Styles.css">

    

<script>
    function clickCounter() {
      if (typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
          localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
          localStorage.clickcount = 1;
        }
        document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
      } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
      }
    }
    </script>

</head>
<body>
    <header>

        <div class="header">
            <ul>
                <div class="nav-area">
                    <a href="index.php"> Home</a>
                    <a href="aboutCorona.php">About</a>
                    <a href="SSYMPTOMS.php">Symptoms</a>
                    <a href="Prevention.php" class="active">Prevention</a>
                    <a href="treatments.php">Treatments</a>
                    <a href="VVACCINES.php">Vaccines</a>
                    <a href="ContactUs.php">Contact</a>
                </div>
            </ul>
        </div>

        
       
        <div class="Info_Covid_div">
            <img src="Imazhet/maska.svg" style="width: 130px; height: 130px; ">
            <h1 style="margin-inline-end: 20px;">Learn how COVID-19 spreads and practice these actions to help prevent the spread of this disease.</h1>
        </div>
        <div class="virusi">
            <li><a href="https://covid.rrinshpi.com/" title="StayHome" >
                <button>
                        <img src="Imazhet/bars.jpg" style="width: 24px; height: 24px;">
                    Click
                    <?php
                        echo strlen("Click");
                    ?>
                </button>
            </a></li>
        </div>
        
    </header>
    <div class="bg-image img1" style="height: 650px; background-image:linear-gradient(white, #B3B6B7)">
       <li>
           <img src="Imazhet/handW.jpg" style="width: 200px; height: 200px; border-radius: 50%;">
           <h2>Clean your hands, with soap or a hand sanitizer with 60% alcohol.</h2>
        </li>
        <li>
           <img src="Imazhet/face-mask.svg" style="width: 200px; height: 200px; border-radius: 50%;">
           <h2> Cover your mouth and nose with a mask when around others.</h2>
        </li>
        <li>
           <img src="Imazhet/social-distancing.svg" style="width: 200px; height: 200px; border-radius: 50%;">
           <h2>Put distance between yourself and other people (at least 6 feet).</h2>
        </li>
        <li>
           <img src="Imazhet/face.png" style="width: 200px; height: 200px; border-radius: 50%;">
           <h2>Avoid touching  face with your hands, such as your mouth, eyes</h2>
        </li>
        <li>
            <img src="Imazhet/practice.webp" style="width: 200px; height: 200px; border-radius: 50%;">
            <h2>Cover your mouth and cover your nose when you cough or sneeze. </h2>
        </li>
       
        <div class="duart??">
            <li><a href="hand.php" target="_blank" style="color: white;">Check how you wash hand</a></li>
        </div>
    </div>
    <div class="bgg-image" style="height: 700px; background-color: #B3B6B7;">
        <img src="Imazhet/steps.png" align="right" style="width:400px";>
        <?php
            $str = "steps";
            printf("Take %s to protect others",$str);
        ?>
        <p id="p1" style="font-size: 25px; margin-left: 30px;">
            Stay home if you???re sick ??? Stay home if you are sick, except to get medical care.
        </p></br>
        <p style="font-size: 25px; margin-left: 30px;">
            Cover your mouth and nose ??? with a tissue when you cough or sneeze (throw used tissues in the trash) or use the inside of your elbow.
        </p></br>
        <p style="font-size: 25px; margin-left: 30px;">
            Wear a facemask if you are sick ??? You should wear a facemask when you are around other people (e.g., sharing a room or vehicle) and before you enter a healthcare provider???s
        </p></br>
        <p style="font-size: 25px; margin-left: 30px;">
            Clean AND disinfect frequently touched surfaces daily ??? This includes phones, tables, light switches, doorknobs, countertops, handles, desks, toilets, faucets, and sinks.
        </p></br>
        <p style="font-size: 25px; margin-left: 30px;">
            Clean the dirty surfaces ??? Use detergent or soap and water prior to disinfection.
        </p></br>
        <p style="font-size: 25px; margin-left: 30px;">
            Stay informed about the local COVID-19 situation ??? Get up-to-date information about local COVID-19 activity from public health officials.
        </p></br>
        <p style="font-size: 25px; margin-left: 30px;">
            Dedicated, lined trash can ??? If possible, dedicate a lined trash can for the ill person. Use gloves when removing garbage bags, and handling & disposing of trash.
        </p></br>
        
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section ">
                <h4>HAVE QUESTIONS?</h4>
                <p><a href="https://www.cdc.gov/cdc-info/index.html">Visit CDC-INFO</a></p>
                <div class="contact">
                    <p>Call: 0800-232-4636<br>Email: <a href="mailto:CDC-INFO@gmail.com">CDC-INFO@gmail.com</a></p> 
                    <p><a href="registrer.php" target="_blank" onclick="clickCounter()">Register</a></p>    
                    <div id="result"></div>     
                </div>
            </div>
           
             <div class="footer-section links">
                <h4> Links</h4>           
                <ul class="list">
                    <li><a href="ContactUs.html">Help & Support</a></li>
                    <li><a href="https://www.cdc.gov/Other/policies.html">Privacy Policy</a></li>
                    <li><a href="Geolocation.html">Location</a></li>
                    <li><a href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/symptoms.html">Corona</a></li>
                </ul>
            </div>
            
            <div class="footer-section contact">
                <h4>Contact Us</h4>
                <form class="forma" id="forma" method="POST">
                    <p>To receive email updates about COVID-19, enter your email address:
                    </p>
                    <input type="email" name="email" class="hapesira" placeholder="Email">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    <p>
                    <a href="https://covid.cdc.gov/covid-data-tracker/#cases_casesper100klast7days">
                        Cases in the last 7 days
                    </a>
                    </p>
                 </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; Copyright Reserved - all rights served 
        </div>
    <footer>
 

</body>
</html>