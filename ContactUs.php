<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="CuntactUs.css">

    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#b8").click(function(){
    alert("Text: "+ $("#test").text());
  });
});
</script>
</head>
<body>
    <header>
        <div class="main">
          <nav class="topnav" id="myTopnav">

            <a href="index.html">  Home</a>
            <a href="aboutCorona.html" >About</a>
            <a href="SSYMPTOMS.html">Symptoms</a>
            <a href="Prevention.html">Prevention</a>
            <a href="treatments.html" >Treatments</a>
            <a href="VVACCINES.html">Vaccines</a>
            <a href="ContactUs.html"class="active">Contact</a>
    
        </nav>
        </div>

        
        

        <div class="Contact">
            <h1>CONTACT US</h1></br></br>
            <h2>If you are having psychological difficulies while in quarantine,please call this number and you will be connceted to a phycologist : 
                          038 200 80 890</h2> 
        </br>
            <h3> 
                 For any suspected case, contact us : 
                 038 200 80 800.
                </h3>
            </br>
                <h4>Feel free to contact us by: telephone ,we will be sure to get back to you as soon as possible.</h4>
        </div>
        <div class="name">
            <h1>Contact Us</h1></br>
           
            
            <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


        </div>

        <div class="text" style="margin-left: 30px;">

<br><br>
           <p><h2 id="test">Please input the number of days you been feeling sick :</h2></p>
           <button id="b8">Show text</button>
<input id="demo" type="text">
<button type="button" onclick="myFunction()">Click</button>
<p id="p01"></p>

<script>
function myFunction() {
  var message, x;
  message = document.getElementById("p01");
  message.innerHTML = "";
  x = document.getElementById("demo").value;
  try { 
    if(x == "")  throw "empty";
    if(isNaN(x)) throw "not a number";
    x = Number(x);
    if(x < 0)  throw "not valid";
    
  }
  catch(err) {
    message.innerHTML = "The message you have put is " + err;
  }
}


</script>

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
        </div>

        <div class="Web Worker">
          <script src="script.js"></script>


        </div>

        
    </header>


<footer class="footer">
    <div class="footer-content">
        <div class="footer-section company">
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
            </ul></div>
        
    <div class="footer-section contact">
        <h4>Contact Us</h4>
        <form class="forma" id="forma">
            <p>To receive email updates about COVID-19, enter your email address:
            </p>
            <input type="email" class="hapesira" placeholder="Email">
            <input type="submit" value="Submit" class="btn btn-primary">

           
<p>
<a href="https://covid.cdc.gov/covid-data-tracker/#cases_casesper100klast7days" target="_blank">Cases in the last 7 days</a>
</p>

        </form>
    </div>
    </div>
    <div class="footer-bottom">
        &copy; Copyright Reserved - all rights served 
    </div>
</footer>


</body>
</html>
