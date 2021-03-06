<!DOCTYPE html>


<html>
    <head>
        <title>All about Covid-19</title>
    </head>
    <body>
        
       <header>

        <div class="main">
            <canvas id = "newCanvas" width = "200" height = "50" style = "border:1px solid#00008B;"></canvas>
            <script>
               var c = document.getElementById('newCanvas');
               var ctx = c.getContext('2d');
               ctx.font = "30px Arial";
               ctx.strokeText("Covid-19",10,50);
             
      
            </script>

<p id="demo"></p>
<script>function Covid(first,second,third){
    this.first=first;
    this.second=second;
    this.third=third;


}

var words = new Covid("Safe ","Informed","Prepared");
document.getElementById("demo").innerHTML =
"Be " + words.first + ","+words.second+", "+words.third+"."; 

</script>
               <nav class="topnav" id="myTopnav">

                <a href="index.php"class="active">Home</a>
                <a href="aboutCorona.php" >About</a>
                <a href="SSYMPTOMS.php">Symptoms</a>
                <a href="Prevention.php">Prevention</a>
                <a href="treatments.php" >Treatments</a>
                <a href="VVACCINES.php">Vaccines</a>
                <a href="ContactUs.php">Contact</a>
        
            </nav>
        
        
           </div>
           <div class="qoute">
               <h2 style="margin-top:-75px; margin-right: 80px;">'Stay alert, control the virus, save lives' </h2>
           </div>

           <script src="main.js"></script>
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
       <style>
           *{
                margin:0;
                padding:0;

           }
     .main{
         widows: 1170px;
         margin:auto;
         

     }
     
     header{
         background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("Imazhet/new_bg.jpg") ;
         height:100vh;
         background-size: cover;
         background-position: center;
          position: relative;
     }

     .topnav {
    display: flex;
    margin-top: 12px;
    margin-left: 35px;
    overflow: hidden;
    justify-content: flex-end;
  
    }
    
    .topnav a {
      float: left;
      display: block;
      color: #33334f;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
      font-family: 'Poppins', sans-serif;
      letter-spacing: 1px;
      font-weight: 400;
      text-transform: uppercase;
      transition: all .25s ease-out;
    }
    
    .topnav a:hover { 
      opacity: .6;
    }
    
    .topnav a.active {
      border-bottom: 1px solid #33334f;
    }
    
    .topnav .icon {
      display: none;
    }

      .logo img{
          width: 150px;
          float:left;
          height: 50px;
          


      }

      .qoute{
          position:absolute;
          width:600px;
          height: 300px;
          margin:20% 30%;
      }
      .qoute h2{
          text-align: center;
          color:grey ;
          text-transform:uppercase;
          font-size: 35px;
          border: 1px solid #fff;
          margin-top: 20px;

      }
      .footer{
    background-color: #1c1c1c;
    height: 250px;
    position: relative;
    padding: 15px 10%;
    }
    .footer .footer-bottom{
        text-align: left;
        border-top: 1px solid #303030;
        padding: 0 10%;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 12px;
        line-height: 40px;
        color: #666666;
    }
    .footer .footer-content{
        border-bottom: 1px solid #000000;
        height: 200px;
        display: flex;
    }
    .footer .footer-content .footer-section{
        flex:1;
        padding:0px 20px 20px 20px;
    }
    .footer .footer-content h4{
        font-size: 12px;
        line-height: 14px;
        color: white;
        font-family:Georgia, 'Times New Roman', Times, serif;
    }
    .footer .footer-content p{
        font-size: 12px;
        line-height: 19px;
        color: #fff;
        font-family:Georgia, 'Times New Roman', Times, serif;
    }
    .footer .footer-section span {
        font-size: 10px;
        line-height: 12px;
        color: #666666;
        font-family: "Georgia";
    }
    .footer .footer-content .latest p{
        display: block;
        margin-bottom: 30px;
        border-bottom: 1px #232323;
        font-size: 12px;
        line-height: 14px;
        color: #666666;
        font-family: "Georgia";
    }
    .footer .footer-content .latest br{
        font-size: 10px;
        line-height: 12px;
        color: #666666;
        font-family: "Georgia";
    }
    .footer .footer-content img{
        float: left;
        margin-right: 10px;
    }
    .footer .footer-content .links ul {
        display: block;
        padding: 0;
    }
    .footer .footer-content .links ul a{
        border-bottom: 1px solid #232323;     
        text-decoration: none;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 12px;
        line-height: 30px;
    }
    .footer .footer-content .links ul a:hover{
        color:white;
        list-style: none;
        margin-left: 15px;
        transition: all .3s;
    }
    .forma .hapesira{
        border: 0px;
        margin-bottom: 10px;
        width: 225px;
        height: 31px;
        border-radius: 7px;
        background-color: #232323;
        font-size: 13px;
        line-height: 21px;
        color: #666666;
        font-family: "Georgia";
    }
    input[type=submit]{
        border: 0px;
        font-size: 13px;
        line-height: 21px;
        color: #ffffff;
        font-family: "Georgia";
        width: 76px;
        height: 31px;
        border-radius: 7px;
        background-color: #2aa2d4;
        
    }
    textarea{
        border: 0px;
        width: 225px;
        height: 110px;
        border-radius: 7px;
        background-color: black;
        font-size: 13px;
        line-height: 21px;
        color:#666666;
        font-family: "Georgia";
    }
    .footer .footer-content .links ul li{
        list-style: none;
    }
    .footer .footer-content .links ul li:before{
        content: '\00BB';
        color:#666666;
    }

      
       </style>

      


</html>