<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="JW Analytics provides elite financial analysis services.">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/1script.js"></script>
    <link rel="icon" href="images/favicon.png">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J085LW6LVT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J085LW6LVT');
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,200;1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
  

    <title>JW Analytics | Watchlist</title>
    </head>
    <body>
         <video autoplay muted loop id="herovid">
           <source src="Black%20-%2013495.mp4" type="video/mp4"></video>
          <nav>
             
            
             <ul class="navul">
                
                 <li class="navli"><a class="inactive" id="home" href="index.html">HOME</a></li>
                 
                 <li class="navli"><a class="inactive-dropdown1" href="profile.html">PROFILE</a><img id="dd1" src="images/dropdown.png" width="981" height="552" alt="Dropdown Button" class="dropdownimg"></li>
                 
                 <li class="navlix"><a class="droplink1s" href="portfolio.html">PORTFOLIO</a></li>
                 <li class="navlix"><a class="droplink1s" href="strategy.html">STRATEGY</a></li>
                 <li class="navlix"><a class="droplink1s" href="risk.html">RISK MANAGEMENT</a></li>
                 
                 <li class="navli"><a class="inactive-dropdown2" href="services.html">SERVICES</a><img id="dd2" src="images/dropdown.png" width="981" height="552" alt="Dropdown Button" class="dropdownimg"></li>  
                 
                 <li class="navlix"><a class="droplink2s" href="securities.html">SECURITIES ANALYSIS</a></li>
                 <li class="navlix"><a class="droplink2s" href="management.html">PORTFOLIO MANAGEMENT</a></li>
                 <li class="navlix"><a class="droplink2s" href="algorithms.html">PROPRIETARY ALGORITHMS</a></li>
                 
                 <li class="navli"><a class="inactive" id="watchlist" href="watchlist.html">WATCHLIST</a></li>
                 <li class="navli"><a class="active" id="contact" href="contact.html">CONTACT</a></li> </ul>
        <a class="menu" href="#"></a></nav>
        
     <div class="dropdown">
    <a class="droplink1" href="portfolio.html">PORTFOLIO</a>
    <a class="droplink1" href="strategy.html">STRATEGY</a>
    <a class="droplink1" href="risk.html">RISK MANAGEMENT</a>
    <a class="droplink2" href="securities.html">SECURITIES ANALYSIS</a>
    <a class="droplink2" href="management.html">PORTFOLIO MANAGEMENT</a>
    <a class="droplink2" href="algorithms.html">PROPRIETARY ALGORITHMS</a>
   </div>
       
       <div class="hero">
          <br/><br/><br/><br/><br/><br/><br/>
            <h1 class="herohead">JW Analytics</h1>
           <p class="herotext">Meaningful &amp; Efficient Financial Analysis</p></div>
        <div class="core">
        <div class="coremain2"><h2 class="maintitle">Contact Us</h2>
             <div class="contactl"><h3 class="watchlistheader" style="font-size: 1.6em">REACH OUT</h3>
         <h2 style="text-align:center; color:white">Thank you for your message!</h2>  
            
            
            
            </div>
           
             <br/><br/><br/><br/>
            <div class="contactbox">
           
                <p class="mainboxtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sem fringilla ut morbi tincidunt augue interdum velit euismod. Nunc sed blandit libero volutpat sed cras ornare. Tincidunt id aliquet risus feugiat in ante. Libero justo laoreet sit amet cursus sit amet. Dictum sit amet justo donec enim diam.</p></div>
            <div class="socialset"><img class="socialimg" src="images/facebook.png" height="400" width="400" alt="Facebook Link"><img class="socialimg" src="images/linkedin.png" height="400" width="400" alt="Linkedin Link"></div>
              <div class="contact"><h3 class="watchlistheader" style="font-size: 1.6em">REACH OUT</h3>
    <h2 style="text-align:center; color:white">Thank you for your message!</h2>  
            
            
            </div>
        

            <br/><br/>
                
            </div>
        
  <footer>JW Analytics © 2021 | Metrics by <a style="color: white" target="_blank"  href="https://www.tradingview.com/widget/">TradingView</a> </footer>
        </div>
          <?php

$namex = $_POST['name'];
   $emailx = $_POST['email1'];
   $phonex = $_POST['tel'];
       $businessx = $_POST['business'];
       $textx = $_POST['text'];
      
      

       $message = "Message from $namex ($emailx)\n\nMessage:\n\n$textx";
      

       mail("brettf3005@gmail.com", "Feedback", $message);
?> 
    </body>



</html>