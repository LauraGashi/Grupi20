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

<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "gethint.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>
    <title>Document</title>
    <link rel="stylesheet" href="VVACCINES.css">

</head>
<body>
    <div class="header">
        <ul>
            <nav class="topnav" id="myTopnav">

                <a href="index.php">  Home</a>
                <a href="aboutCorona.php" >About</a>
                <a href="SSYMPTOMS.php" >Symptoms</a>
                <a href="Prevention.php">Prevention</a>
                <a href="treatments.php" >Treatments</a>
                <a href="VVACCINES.php" class="active">Vaccines</a>
                <a href="ContactUs.php">Contact</a>
        
            </nav>
        </ul>
    </div>
    <br>

    <div class="L-1">
    <h1>All about Vaccines</h1>
    <hr>
    <br>
    <p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>

    <img src="Imazhet/Vaccine.jpg" height="450" width="1100">
    </div>
  


    
    <div style="margin-top: 4000px;"></div>

    <div class="feature-box">
      <div class="features">
         <h1>Hospitalization and Death by Age</h1>
      <div class="features-desc">
           <div class="features-text">
               <p>
                  A small proportion of excess deaths are indirect, a result of the conditions created by the impact of the pandemic,rather than because
                  of the virus itself (see ???Deaths from other causes???).Some hospitals report that people with cancer and chronic conditions
                   are skipping their regular check-ups, which could put their health in jeopardy. Reports of domestic violence have increased in 
                   some places, and researchers who study mental health worry about the toll on front-line workers and those living under lockdown 
                   measures, although it???s not yet clear whether there has been a rise in the number of deaths as a result.
               </p>
           </div>
      </div>
      </div>
      
      <div class="features-table">
          <table >
              <tr class="rreshti1">
              <td class="Age">Age</td>
              <td class="Hosp">Hospitalization</td>
              <td class="D">Death</td>
              </tr>
              
              <tr class="rreshti2" >
              <td class="Age">0-4 years</td>
              <td class="Hosp">4x lower</td>
              <td class="D">9x lower</td>
              </tr>
              
              <tr class="rreshti1">
              <td class="Age">5-17 years</td>
              <td class="Hosp">9x lower</td>
              <td class="D">16x lower</td>
              </tr>
              
              <tr class="rreshti2">
              <td class="Age">18-29 years</td>
              <td class="Hosp">Comparison Group</td>
              <td class="D">Comparison Group</td>
              </tr>
              
              <tr class="rreshti1">
              <td class="Age">30-39 years</td>
              <td class="Hosp">2x higher</td>
              <td class="D">4x higher</td>
              </tr>
              
              <tr class="rreshti2">
              <td class="Age">40-49 years</td>
              <td class="Hosp">3x higher</td>
              <td class="D">10x higher</td>
              </tr>
              
              <tr class="rreshti1">
              <td class="Age">50-64 years</td>
              <td class="Hosp">4x higher</td>
              <td class="D">30x higher</td>
              </tr >
              
              <tr class="rreshti2">
              <td class="Age">65-74 years</td>
              <td class="Hosp">5x higher</td>
              <td class="D">90x higher</td>
              </tr>
              
              <tr class="rreshti1">
              <td class="Age">75-84 years</td>
              <td class="Hosp">8x higher</td>
              <td class="D">220x higher</td>
              </tr >
              
              <tr class="rreshti2">
              <td class="Age">85+ years</td>
              <td class="Hosp">13x higher</td>
              <td class="D">630x higher</td>
              </tr>
              </table>
          </div>
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



       <div class="Permbajtja">
        <h1>Preparations for delivery</h1>
        <hr> 
        <br>
        <div class="vaccine">
        <img src="Imazhet/vaksinat1.jpeg.jpg" alt="" width="430" height="270">
        <div class="vaccine-1">
        <h3><a href="https://www.who.int/publications/m/item/who-working-group-target-product-profiles-for-covid-19-vaccines">Vaccine target product profile</a></h3>
        <p>WHO has published the target product profiles for COVID-19 vaccines,which describes the preferred and minimally acceptable profiles for human vaccines for long term protection of persons at high ongoing risk of COVID-19,and for reactive use in outbreak settings with rapid onset of immunity.We have also published the criteria for prioritization of vaccines for clinical trials.</p>
             </div>
        </div>
    
        <div class="V-13">
            <img src="Imazhet/vaksina2.jpeg.jpg" alt="" width="430" height="270">
              <div V-12>
               <h3><a href="https://www.who.int/publications/m/item/criteria-for-covid-19-vaccine-prioritization" target="_blank">Criteria for COVID-19 vaccine prioritization</a></h3>
                <p>The proposed atributes and criteria provide considerations for the evaluation and prioritization of COVID-19 candidate vaccines to be considered for further development by WHO.The target audience includes vaccine scientists,product developers,manufacturers and funding agencies.</p>
    
              </div>
        </div> <br>
    
    <h2>Read our "Vaccines Explained" series</h2>
        <hr> <br>
        <div class="work">
        <img src="Imazhet/vaccinework.jpeg.jpg" alt="" width="400" height="270">
        <h3><a href="https://www.who.int/news-room/feature-stories/detail/how-do-vaccines-work">How do vaccines work?</a></h3>
       </div>
    
       <div class="development">
         <img src="Imazhet/developed.jpg.jpg" alt=""width="400" height="270">
         <h3><a href="https://www.who.int/news-room/feature-stories/detail/how-are-vaccines-developed">How are vaccines developed?</a></h3>
       </div>
    
       <div class="Journey">
           <img src="Imazhet/Journey-of-a-vaccine.jpeg.jpg" alt=""width="400" height="270" >
           <h3><a href="https://www.who.int/news-room/feature-stories/detail/manufacturing-safety-and-quality-control">Manufacturing,safety, and quality control of vaccines</a></h3>
       </div>
       
    
       <div class="Learn">
         <h2>Learn more</h2>
         <hr>
         <h3><a href="https://www.who.int/initiatives/act-accelerator/covax">COVAX</a></h3>
          <hr>
          <h3><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019">Covid-19</a></h3>
          <hr> <br>
          <h2>Questions & Answers</h2>
          <hr>
          <h3><a href="https://www.who.int/news-room/q-a-detail/coronavirus-disease-(covid-19)-vaccine-research-and-development">Coronavirus disease (Covid-19):COVID-19 Vaccine research and development</a></h3>
          <hr>
          <h3><a href="https://www.who.int/news-room/q-a-detail/vaccines-and-immunization-what-is-vaccination">Q&A on vaccines</a></h3>
          <hr>
       </div>
    </div>



    <div class="L-2">
    <p>The world is in the midst of a<strong> COVID-19 pandemic</strong>.
       As WHO and partners work together on the response tracking the pandemic, advising on critical interventions
       distributing vital medical supplies to those in need they are racing to develop and deploy safe and 
       <strong>effective vaccines</strong>. Vaccines save millions of lives each year. 
       Vaccines work by training the body???s natural defences the immune system to 
       fight off the viruses and bacteria they target.If the body is exposed to those disease-causing germs later, 
       the body is ready to destroy them, preventing illness.There are more than 50 COVID-19
       vaccine candidates in trials.<strong>WHO is working in collaboration with scientists, business,and global health 
       organizations through the ACT Accelerator</strong> to speed up the pandemic response. 
       
       </p>
    </div>


    <div class="Video">
        <video width="1120" height="840" controls>
            <source src="Video/video.mp4" type="video/mp4">
          </video>
          </div>

    <div class="class0">
      <div class="classL1"><h1>R&D Blueprint</h1><img class="dasimages" src="Imazhet/coronavirus.jpg" width="100%" height="180"/> As part of WHO???s response, <strong>the R&D Blueprint</strong> was activated to accelerate diagnostics, vaccines and therapeutics for this novel coronavirus.<strong> The Blueprint aims to improve</strong> coordination between scientists and global health professionals, accelerate the research and development process, and develop new norms and standards to learn from and improve upon the global response.Building on the response to recent outbreaks of Ebola virus disease, SARS-CoV and MERS-CoV,<strong> the R&D Blueprint has facilitated a coordinated and accelerated response to COVID-19, </strong> including an unprecedented program to develop a vaccine, research into potential pharmaceutical treatments and strengthened channels for information sharing between countries. World scientists on<strong> COVID-19</strong> then met at the<strong> World Health Organization???s Geneva headquarters on 11???12 February 2020 </strong>to assess the current level of knowledge about the new virus, agree on critical research questions that need to be answered urgently, and to find ways to work together to accelerate and fund priority research to curtail this outbreak and prepare for those in the future.The discussion led to an agreement on two main goals. The first was to accelerate innovative research to help contain the spread of the epidemic and facilitate care for those affected. The second was to support research priorities that contribute to global research platforms in hopes of learning from the current pandemic response to better prepare for the next unforeseen epidemic.</div>

      <div class="classL2"><h1>Draft landscape of COVID-19 vaccine candidates</h1><img class="dasimages" src="Imazhet/photo-1605289982774-9a6fef564df8.jpg" width="100%"/><strong>The COVID-19 candidate vaccine landscape database</strong> compiles detailed information on COVID-19 vaccine candidates in development.

        The landscape is updated regularly - twice a week (Tuesday and Friday, 17:00 CET).
        
        The landscape:
        
        provides summary tables of COVID-19 vaccine candidates in both clinical and pre-clinical development;
        provides analysis and visualization for several COVID-19 vaccine candidate categories;
        tracks the progress of each vaccine<strong>from pre-clinical, Phase 1, Phase 2 through to Phase 3 </strong>efficacy studies,
        provides links to published reports on safety, immunogenicity and efficacy data of the vaccine candidates;
        includes information on key attributes of each vaccine candidate; and
        allows users to search for COVID-19 vaccines through various criteria such as vaccine platform, dosage, schedule of vaccination, route of administration, developer, trail phase and clinical endpoints being measured in Phase 3..</div>

      <div class="classL3"><h1>Who can take the Pfizer-BioNTech COVID-19 vaccine?</h1><img class="dasimages" src="Imazhet/c1_3816551.jpg" width="100%"/> According to SAGE, the<strong>
         Pfizer-BioNTech COVID-19 mRNA vaccine </strong>is safe and effective. Nevertheless, there are specific populations for whom vaccination is not recommended, either due to contraindications, lack of supply, or limited data. These populations currently include people with a history of severe allergies, most pregnant women, international travellers who are not part of a prioritized group, and children under 16.

        The priority is to start vaccinating health workers at high risk of exposure, followed by older adults, before immunizing the rest of the population. 
        
        <strong>People with allergies</strong>
        
        People with a history of severe allergic reaction to any component of the vaccine should not take it.
        
       <strong> Pregnant and breastfeeding women</strong>
        Pregnant women are at higher risk of severe COVID-19 than non-pregnant women, and COVID-19 has been associated with an increased risk of pre-term birth..
        
    
       <strong> Children</strong>
        The vaccine has only been tested in children above 16 years of age.
        Therefore, at this time, WHO does not recommend vaccination of children below 16 years of age, even if they belong to a high-risk group.
       <strong> People with known medical conditions</strong>
        The vaccine has been found to be safe and effective in people with various conditions that are associated with increased risk of severe disease.
        
      
      </div>


  </body>
</html>
