<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type='text/css' media='screen' href='about.css'>
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

    <title>Faqja kryesore</title>
</head>
<body>

    <nav class="topnav" id="myTopnav">

        <a href="index.php">Home</a>
        <a href="aboutCorona.php" class="active">About</a>
        <a href="SSYMPTOMS.php">Symptoms</a>
        <a href="Prevention.php">Prevention</a>
        <a href="treatments.php" >Treatments</a>
        <a href="VVACCINES.php">Vaccines</a>
        <a href="ContactUs.php">Contact</a>

    </nav>

<div data-slide="slide" class="slide">
        
    <div class="slide-items">
        <img src="Imazhet/Covid-19_Common_Symptoms.jpg" alt="Symptoms" />
        <img src="Imazhet/coronavirus-prevention-infographic-vector.jpg" alt="Prevention" />
        <img src="Imazhet/cu-treatments-webpage-1600x900-final.jpg" alt="Treatments" />
        <img src="Imazhet/_114241106_vaccineillus976_rtrs.jpg" alt="Vaccine" />
    </div>
    
    <nav class="slide-nav">
        <div class="slide-thumb">
         
        </div>
        <span class="slide-prev"><img src="Imazhet/ChevronLeftCircle-512.png" width="50" height="50" border:2px grey; color: grey;></span>
        <span class="slide-next"><img src="Imazhet/ChevronLeftCircle-512.png" width="50" height="50" border:2px grey; color: grey;  ></span>
    </nav>

    <h3 style="text-align: center; font-family: Georgia, 'Times New Roman', Times, serif;"  > All information about <span style="color:darkolivegreen;font-weight:bold">COVID-19 </span>can be found on our web site.
        We keep you informed of the latest, you can also contact us and you will receive emails for any new news.        
     </h3>
</div>
<script src="slider.js"></script>
         
            <section class="vija">
                <div class="vija1">
                    <hr>
                </div>
                <div class="vija2">
                    <hr>
                </div>    
            </section>
            <section class="partone">
                <div class="div1">
                    
                    <article>
                        <img src="https://caretowardscure.com/wp-content/uploads/2020/06/doctors-list-covid-19-coronavirus-prevention-cute-illustration_107355-169.jpg" title="How to Protect Yourself" class="foto1">
                        <h3>How to Protect Yourself</h3>
                        <p style="font-style: normal; font-size: 20px;">  <ol>
                            <li>Clean your hands often.</li>
                            <ul>
                                <li>Use soap and water</li>
                                <li>Use Hand Sanitizer</li>
                              </ul>
                            <li>Avoid touching your eyes, nose and mouth.</li>
                            <li>Limit social gatherings and time spent in crowded places.</li>
                            <li>Avoid close contact with someone who is sick.</li>
                        </ol>
                        </p>
                    </article>
                    <article>
                        <img src="Imazhet/older-patient-with-caregiver-at-home-small.jpg"  title="People at Increased Risk for Severe Illness" class="foto1"></a>
                        <h3>People at Increased Risk for Severe Illness  </h3>
                        <p style="font-style: oblique; font-size: 20px;"> 
                            Some people are more likely than others to become severely ill
                        </p> 
                        <p  style="font-style: oblique; font-size: 20px;">
                            Click on the link below.
                        </p>
                        <a href="https://www.cdc.gov/coronavirus/2019-ncov/need-extra-precautions/older-adults.html" >Older Adults</a>
                    </article>
                </div>
                <div class="div2">
                    <article class="project_article">
                        <img src="https://cdnuploads.aa.com.tr/uploads/Contents/2020/04/20/thumbs_b_c_5c24bad7eabcf5a6b052e9bebc9c5e5b.jpg?v=180033" title="Quarantine" class="foto1" ></a>
                        <h3>Quarantine&Isolation</h3>
                         <p><strong>Quarantine</strong> keeps someone who might have been exposed to the virus away from others.
                            <mark>Isolation</mark> keeps someone who is infected with the virus away from others, even in their home.
                            People who have tested positive for COVID-19 within the past 3 months and recovered do not have to quarantine or get tested again as long as they do not develop new symptoms.
                           People who develop symptoms again within 3 months of their first bout of COVID-19 may need to be tested again if there is no other cause identified for their symptoms.</p>

                    </article>
                    <article class="project_article">
                        <a href="VVACCINES.html"> <img src="Imazhet/adobestock.jpg" title="COVID-19 Vaccines" class="foto1"></a>
                        <h3>COVID-19 Vaccines</h3>         
             <p>
                         Depending on the specific vaccine you get, a second shot 3-4 weeks after your first shot is needed to get the most protection 
                         the vaccine has to offer against this serious disease.The goal is for everyone to be able to easily get vaccinated against COVID-19 as soon as large enough quantities are available. 
                         Once vaccine is widely available, the plan is to have several thousand vaccination providers offering COVID-19 vaccines in doctors??? offices, retail pharmacies, hospitals, and federally qualified health centers.
                         
                        </p>
                    </article>  
                </div>
            </section>
                
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

                <script src="slider.js"></script> 
        </body>
        </html>
