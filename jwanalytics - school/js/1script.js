$(document).ready(function() { 
     $(this).scrollTop(0);
           $('.dropdown').hide(0);
        $('.inactive-dropdown1,.active-dropdown1').mouseover(function(){$('.dropdown,.droplink1').slideDown(100);$('.droplink2').hide(0)});      $('#dd1').click(function(){$('.dropdown,.droplink1').slideDown(100);$('.droplink2').hide(0)}); 
 $('.hero').mouseout(function(){$('.dropdown,.droplink1').slideUp(100);});  
     $('.inactive-dropdown2,.active-dropdown2 ').mouseover(function(){$('.dropdown,.droplink2').slideDown(100);$('.droplink1').hide(0)}) ;
     $('#dd2').mouseover(function(){$('.dropdown,.droplink2').slideDown(100);$('.droplink1').hide(0)}) ;  
 $('.hero').mouseout(function(){$('.dropdown,.droplink2').slideUp(100);})  ;
  $('#home,#watchlist,#contact').mouseover(function(){$('.dropdown').slideUp(100)});
    $('.box1outer,.box1').mouseover(function(){$('.box1').css("background-color", "rgba(0,0,0,0.3)")});
    $('.box1outer,.box1').mouseout(function(){$('.box1').css("background-color", "rgba(0,0,0,0.7)")});
   
     $('.box2outer,.box2').mouseover(function(){$('.box2').css("background-color", "rgba(0,0,0,0.3)")});
    $('.box2outer,.box2').mouseout(function(){$('.box2').css("background-color", "rgba(0,0,0,0.7)")});
 
         $('.box3outer,.box3').mouseover(function(){$('.box3').css("background-color", "rgba(0,0,0,0.3)")});
    $('.box3outer,.box3').mouseout(function(){$('.box3').css("background-color", "rgba(0,0,0,0.7)")});
  
$('.core,.herohead,.herotext').hide(0).delay(50).fadeIn(600);
 



    

  

 });  



                       