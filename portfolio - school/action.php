<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["mail"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}

 
  $comment = test_input($_POST["comment"]);
  $num = test_input($_POST["num"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bold, Intentional, and Unique Web Design from Brett Foster">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-anims3.js"></script>
  
    <link rel="icon" href="images/favicon.png">

    <link rel="stylesheet" href="css/release2.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
    <title>Brett Foster | Reach Out</title>
    </head>
    <body>
        
        <div class="navbox">
          <nav class="largenav">
              <a href="tracker.php?page=home.html"><div class="maintitlesmall">BF</div></a>
    
             <ul class="navul">
               
                 <li class="closeicon"></li>
                 <li class="navli" id="closer1"><a class="inactive"  href="tracker.php?page=home.html">Home</a></li>
                 
                  <li class="navli" id="closer2"><a class="inactive"  href="tracker.php?page=about.html">About</a></li>
                 
                 <li class="navli" id="techdrop"><a  class="dropdown" href="tracker.php?page=techskills.html">Technical Skills</a><img src="images/dropdown.png"  width="981" height="552" alt="Dropdown Button" class="dropdownimg"></li>
                 
                
                 <li class="navli" id="adobedrop"><a  class="dropdown" href="tracker.php?page=adobeskills.html">Adobe Skills</a><img src="images/dropdown.png"  width="981" height="552" alt="Dropdown Button" class="dropdownimg"></li>  
                 
                
                 
                  <li class="navli" id="designdrop" ><a class="dropdown" href="tracker.php?page=designskills.html">Design Skills</a><img  src="images/dropdown.png"  width="981" height="552" alt="Dropdown Button" class="dropdownimg"></li>  
                 
                
                 
                 <li class="navli" id="closer3"><a class="inactive"  href="tracker.php?page=placeholder.html">Projects</a></li>
                 <li class="navli" id="closer4"><a class="active"  href="#">Contact</a></li> </ul>
        <a class="menu" href="#"></a></nav>
        
        <div class="smartmenu">
        <ul class="smartlist"> <li class="navtech"><a class="droplink" href="tracker.php?page=5n3.html">HTML5/CSS3</a></li>
                 <li class="navtech"><a class="droplink" href="tracker.php?page=placeholder.html">JAVASCRIPT</a></li>
                  <li class="navtech"><a class="droplink" href="tracker.php?page=placeholder.html">PHP</a></li>
            
            <li class="navadobe"><a class="droplink" href="tracker.php?page=photoshop.html">PHOTOSHOP</a></li>
                 <li class="navadobe"><a class="droplink" href="tracker.php?page=placeholder.html">PREMIERE</a></li>
             <li class="navadobe"><a class="droplink" href="tracker.php?page=placeholder.html">AUDITION</a></li>
                  <li class="navadobe"><a class="droplink" href="tracker.php?page=placeholder.html">BRACKETS</a></li>
            
              <li class="navdesign"><a class="droplink" href="tracker.php?page=uxui.html">UX/UI DESIGN</a></li>
                 <li class="navdesign"><a class="droplink" href="tracker.php?page=seo.html">SEO</a></li>
             <li class="navdesign"><a class="droplink" href="tracker.php?page=placeholder.html">jQuery</a></li>
                  <li class="navdesign"><a class="droplink" href="tracker.php?page=placeholder.html">RWD</a></li></ul>
        </div>
        </div>
         <nav class="smallnav">
            
    
             <ul  class="navul2">
                 
                 <li class="closeicon"></li>
                 <li class="navli2"><a class="inactive"  href="tracker.php?page=home.html">Home</a></li>
                 
                  <li class="navli2"><a class="inactive"  href="tracker.php?page=about.html">About</a></li>
                 
                 <li class="navli2"><a id="techdrop2" class="dropdown" href="tracker.php?page=techskills.html">Technical Skills</a><a href="#" class="techdrop"> </a></li>
                 
                 <li class="navtech2"><a class="droplinks"  href="tracker.php?page=5n3.html">HTML5/CSS3</a></li>
                 <li class="navtech2"><a class="droplinks" href="tracker.php?page=placeholder.html">Javascript</a></li>
                  <li class="navtech2"><a class="droplinks" href="tracker.php?page=placeholder.html">PHP</a></li>
                 
                 <li  class="navli2"><a id="adobedrop2" class="dropdown" href="tracker.php?page=adobeskills.html">Adobe Skills</a><a href="#" class="adobedrop"> </a></li>  
                 
                 <li class="navadobe2"><a class="droplinks" href="tracker.php?page=photoshop.html">Photoshop</a></li>
                 <li class="navadobe2"><a class="droplinks" href="tracker.php?page=placeholder.html">Premiere</a></li>
                 <li class="navadobe2"><a class="droplinks" href="tracker.php?page=placeholder.html">Audition</a></li>
                   <li class="navadobe2"><a class="droplinks" href="tracker.php?page=placeholder.html">Brackets</a></li>
                 
                  <li  class="navli2"><a id="designdrop2" class="dropdown" href="tracker.php?page=designskills.html">Design Skills</a><a href="#" class="designdrop"> </a></li>  
                 
                 <li class="navdesign2"><a class="droplinks" href="tracker.php?page=uxui.html">UX/UI Design</a></li>
                 <li class="navdesign2"><a class="droplinks" href="tracker.php?page=seo.html">SEO</a></li>
                 <li class="navdesign2"><a class="droplinks" href="tracker.php?page=placeholder.html">jQuery</a></li>
                  <li class="navdesign2"><a class="droplinks" href="tracker.php?page=placeholder.html">RWD</a></li>
                 
                 <li  class="navli2"><a class="inactive"  href="tracker.php?page=placeholder.html">Projects</a></li>
                 <li  class="navli2"><a class="active"  href="#">Contact</a></li> </ul>
       </nav>
        <br/><br/>
       
        <br/>
        <br/> <div class="description">Here is the last page in the development timeline. I've started with a fresh core layout and have worked to include an attractive contact form. There are also social links planned for this page, so there'll be some new photoshop work here. With the form comes some new PHP as I've implemented a form validator. This page is important for the website, and should effectively help potential clients get in touch with me, or just investigate further with my social links. <br/><br/><a style="font-weight: bold; color: rgb(255, 208, 66)" href="index.html">Return to Index</a></div><br/><br/> 
        <h1 class="header">Brett Foster</h1>
        <p class="slogan">Bold, Intentional &amp; Unique Web Design</p>
        <br/><br/><br/><br/><br/>
        <div class="homecore">
            <br/><br/>
       <h2 style="text-align:center">Thank you for your message!</h2>
            <br/>
            <h1><a style="color: white" href="contact.html">Return</a></h1>
       
            
           
            <br/><br/>
          
            
            
        </div>
        
     
        
        
        
         <br/><br/><br/>
        <footer>Brett Foster © 2022 | <a style="color: white" href="storyboard.png">Storyboard</a> | <a style="color: white" href="proposal.pdf">Proposal</a> | <a style="color: white" href="index.html">Index</a> </footer>
    </body>




</html>