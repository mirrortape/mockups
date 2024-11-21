$(document).ready(function() { 
     $(this).scrollTop(0);
    $('.navul2,.navli2').hide(0);
    $('.homecore').hide(0).delay(600).fadeIn(900);
    $('#homebox2').hide(0).delay(900).fadeIn(900);
 $('#homebox3').hide(0).delay(900).fadeIn(900);
    $('#homebox4').hide(0).delay(900).fadeIn(900);
    $('#homebox5').hide(0).delay(900).fadeIn(900);
    $('.header').hide(0).delay(300).fadeIn(600);
$('.slogan').hide(0).delay(300).fadeIn(600);


    $('.navtech,.navadobe,.navdesign').hide(0);

   $('.menu').click(function(){
       $('#clone,.navli2,.navul2,.smallnav').show(0); $('.menu').hide(10);
       
   });
     $('.closeicon').click(function(){
       $('#clone,.navli2,.navul2,.smallnav').hide(0); $('.menu').show(10);
       
   });
    
   
     
 });  



                       