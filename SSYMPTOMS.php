<!DOCTYPE html>
<html lang="en">
<head>

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
    <title>Document</title>
    <link rel="stylesheet" href="SSYMPTOMS.css">
</head>
<body>
    
    <div class="header">
        
        <nav class="topnav" id="myTopnav">

            <a href="index.php">Home</a>
            <a href="aboutCorona.php" >About</a>
            <a href="SSYMPTOMS.php" class="active">Symptoms</a>
            <a href="Prevention.php">Prevention</a>
            <a href="treatments.php" >Treatments</a>
            <a href="VVACCINES.php">Vaccines</a>
            <a href="ContactUs.php">Contact</a>
    
        </nav>
    </div>

    <div class="class-1">
    
    <?php
        $arr=array('Symptoms', 'of', 'Covid-19');
        echo implode(" ",$arr);
    ?>
    <hr>
    <br>
    <p> <strong>COVID-19 affects different people in different ways.
         Infected people have had a wide range of symptoms reported – from mild symptoms to severe illness.</strong></p>
         
         <br>
         <img src="Imazhet/simptomat.jpg" height="370" width="800">
         <br>
    </br>
</div>
    
    <div class="L-21">

         
    <?php
        $str = "Symptoms are separated in two ,three groups:";
        echo trim($str,",three");
    ?>
<ul>
    <li>
    <?php
        echo substr("CCCommon Symptoms",2);
    ?>
    </li>
    <li>Emergency Symptoms</li>
</ul>   

</div>


 <div>
     <img src ="Imazhet/brreath.jpg" height="210" width="320" alt="" align="left" />
     <img src="Imazhet/fatiguue.jpg" height="210" width="320" alt="" align="center" />
     <img src="Imazhet/temperature.jpg" height="210" width="320" alt="" align="right"/>
 </div>
 <br>
 <br>
 <div class="L-22">
     <p>
        <strong>Shortness of breath </strong>is more likely to 
        be a warning sign of COVID-19 
         if it's accompanied by a fever, cough, or body aches. 
         On average, shortness of breath tends to set in around
          4 to 10 days after you contract an infection with the new coronavirus.
           Shortness of breath may be mild and not last long.
     </p>
    </div>
<div class="L-23">
    <p>
        <strong>Fatigue </strong> is the presenting symptom in many patients with COVID-19,
         ranging from 44% to 70% of cases.
          The extent and duration of this symptom remain an unknown area,
           mainly whether it represents a post-viral 
           fatigue syndrome triggered by the virus.
           </p>

</div>

<div class="L-24">
    <p>
       <strong>Temperature</strong> Having a high temperature is a common symptom of coronavirus, 
        although not everyone with coronavirus will have a high temperature.
        Take your temperature with a thermometer when you suspect of having the virus.

    </p>
</div>


    <div class="Old">
    <form action="">
        <fieldset>
            <legend>symptoms</legend>
    <h2>What do you need to know </h2>
     <ul> 
        <li>Anyone can have mild to servere symptoms</li>
        <br>
        <li><strong>Older adults and people who have servere underlying medical conditions</strong > like heart or lung disease or diabetes seem to be at higher risk for developing more serious complications from COVID-19 illness. </li>
     </ul>

    </fieldset>
    </form>
      </div> 
      <br>
      <div class="COVID-19">
    
        <h2>Watch for symptoms</h2>
        <p>People with<strong> COVID-19 </strong> had a wide range of symptoms reported – ranging from mild symptoms to severe illness.COVID-19 seems to spread more easily than flu and causes more serious illnesses in some people. It can also take longer before people show symptoms and people can be contagious for longer.  </p>
        <p>Symptoms may appear 2-14 days after exposure to the virus. People with these symptoms may have COVID-19:</p>
          <ul> 
     <li>Fever or chills</li>
     <li>Cough</li>
     <li>Shortness of breath or difficulty breathing</li>
     <li>Fatigue</li>
     <li>Muscle or body aches</li>
     <li>Headache</li>
     <li>New loss of taste or smell</li> 
     <li>Sore throat</li>
     <li>Congestion or runny nose</li>
     <li>Nausea or vomiting</li>
     <li>Diarrhea</li>

         </ul>
 </div>

  
        
            <div class="content">
            <h3>Caring for yourself or others</h3>
            <ul>
                <li><a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/prevention.html">How to protect yourself?</a></li>
                <li><a href="https://www.cdc.gov/coronavirus/2019-ncov/if-you-are-sick/care-for-someone.html">How to care for someone who is sick?</a></li>
                <li><a href="https://www.cdc.gov/coronavirus/2019-ncov/if-you-are-sick/steps-when-sick.html">What to do when you are sick?</a></li>
            </ul>
        </div>

        <div class="class3">
            <p> Look for <strong>emergency warning signs </strong>for COVID-19. If someone is showing any of these signs, <strong>seek emergency medical care immediately </strong>:</p>
        
             <ul>
               <li>Trouble breathing</li>
               <li>Persistent pain or pressure in the chest</li>
               <li>New confusion</li>
               <li>Inability to wake or stay awake</li>
               <li>Bluish lips or face</li>
            </ul>
            <p>*This list is not all possible symptoms. Please call your medical provider for any other symptoms that are severe or concerning to you.</p>
            <p><strong>Call 911 or call ahead to your local emergency facility: </strong>Notify the operator that you are seeking care for someone who has or may have COVID-19.</p>
        
             </ul>
        
        </div>

        <div style="margin-top:-170px"></div>


        <div class="nav">
        <li><a href="nav.html"> Some images of Coronavirus </a></li>
        </div>




        <div class="Video">
            <video width="520" height="410" controls>
                <source src="Video/videoo.mp4" type="video/mp4">
              </video>
              </div>






       
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
