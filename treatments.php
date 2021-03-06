<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treatments</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800", rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    


    <!-- my styles -->
    <link rel="stylesheet" href="treatments.css">
    
    <script src="https://kit.fontawesome.com/0f92c53527.js" crossorigin="anonymous"></script>
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
  
        <nav class="topnav" id="myTopnav">

            <a href="index.php">Home</a>
            <a href="aboutCorona.php">About</a>
            <a href="SSYMPTOMS.php">Symptoms</a>
            <a href="Prevention.php">Prevention</a>
            <a href="treatments.php" class="active">Treatments</a>
            <a href="VVACCINES.php">Vaccines</a>
            <a href="ContactUs.php">Contact</a>
    
        </nav>

   

        <div class="about_slogan">
            <h1>Coronavirus (COVID-19) <br>Treatment</h1>
            <p class="paragraph_style">The most common symptoms of <span>COVID-19</span> are coughing, fever, and breathing problems.</p>
            <button class="button1">A message for you</button>
            <div class="safe_button">Stay Safe!</div>
        </div>

        <div class="table_row">
            <div class="table_shelve">
                <div class="tile quote">
                    <div class="box-icon">
                       <img src="imazhet/procedures-solid.svg" alt="treatments">
                    </div>
                    <h3>Treatment</h3>
                    <p>The most common symptoms of COVID-19 are a fever, coughing, and breathing problems. Unless you have severe symptoms, you can most likely treat them at home, the way you would for a cold or the flu. Most people recover from COVID-19 without the need for hospital care. Call your doctor to ask about whether you should stay home or get medical care in person.
        
                        Scientists are trying to make new medicines and test some existing drugs to see whether they can treat COVID-19. In the meantime, there are a number of things that can relieve symptoms, both at home and at the hospital.
                        
                        <br></p>
                </div>
        
                <div class="tile quote">
                    <div class="box-icon">
                       <img src="imazhet/home-solid.svg" alt="treatments">
                    </div>
                    <h3>At-Home Coronavirus Treatment</h3>
                    <p>If your symptoms are mild enough that you can recover at home, you should: </p>
                        <ul>
                            <li>Rest. It can make you feel better and may speed your recovery.</li>
                            <li>Stay home. Don't go to work, school, or public places.</li>
                            <li>Drink fluids. You lose more water when you're sick. Dehydration can make symptoms worse and cause other health problems.</li>
                            <li>Monitor. If your symptoms get worse, call your doctor right away. Don't go to their office without calling first. They might tell you to stay home, or they may need to take extra steps to protect staff and other patients.</li>
                            <li>Ask your doctor about over-the-counter medicines that may help, like acetaminophen to lower your fever.</li>
        
                        </ul>    
                    
                </div>
        
                <div class="tile quote">
                    <div class="box-icon">
                       <img src="imazhet/disease-solid.svg" alt="treatments">
                        
                    </div>
                    <h3>Avoid infecting other people</h3>
                        <ul>
                            <li>Try to stay in one place in your home. Use a separate bedroom and bathroom if you can.</li>
                            <li>Tell others you're sick so they keep their distance.</li>
                            <li>Cover your coughs and sneezes with a tissue or your elbow.</li>
                            <li>Wear a mask over your nose and mouth if you can.</li>
                            <li>Wash regularly, especially your hands.</li>
                            <li>Don't share dishes, cups, eating utensils, towels, or bedding with anyone else.</li>
                            <li>Clean and disinfect common surfaces like doorknobs, counters, and tabletops.</li>
        
                        </ul>    
                    
                </div>
        
                <div class="tile quote">
                    <div class="box-icon">
                        <img src="imazhet/lungs-virus-solid.svg" alt="treatments">

                    </div>
                    <h3>How do you know if your symptoms are getting worse?</h3>
                    <p>Get medical care right away if you begin to have: </p>
                        <ol>
                            <li>Trouble breathing</li>
                            <li>Pain or pressure in your chest</li>
                            <li>Confusion or severe drowsiness</li>
                            <li>A blue tint to your lips or face</li>
        
        
                        </ol>    
                    
                </div>
        
                <div class="tile quote">
                    <div class="box-icon">
                       <img src="imazhet/hospital-alt-solid.svg" alt="treatments">
                        
                    </div>
                    <h3>Coronavirus Treatment in a Hospital</h3>
                    <p>You don't need to go to the hospital or ER if you have basic COVID-19 symptoms, like a mild fever or cough. If you do, many hospitals will send you home.</p>
                    <p>If your case is severe, members of the medical staff will check for signs that the illness is causing more serious problems. They might:</p>
        
                    <ul>
                        <li>Check the levels of oxygen in your blood with a clip-on finger monitor</li>
                        <li>Listen to your lungs</li>
                        <li>Give you a COVID-19 test. This involves putting a 6-inch cotton swab up both sides of your nose for about 15 seconds.</li>
                        <li>Give you a chest X-ray or CT scan</li>
        
                    </ul>    
        
                </div>
                
        
            </div>
        </div>

        
        <div class="about_slogan"> 
            <h2 class="statistics"></h2>
        </div>

        <iframe src="https://ourworldindata.org/grapher/total-cases-covid-19?tab=map" style="border-top: transparent;" width="100%" height="600px"></iframe>

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

    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>


  <script>
      $('p.paragraph_style span').css("font-weight","bold");

      $('.box-icon img').addClass('responsive-img');

      $('.about_slogan h2.statistics').append("Covid-19 Statistics and More");


      $(".safe_button").css("display","none");
      $(".button1").click(function(){
        $(".safe_button").show("slow",function(){})

    });

  </script>
</html>
