$(document).ready(function() { 
     $(this).scrollTop(0);
    $('.navul2,.navli2,.navtech2,.navadobe2,.navdesign2').hide(0);
    $('.homecore').hide(0).delay(600).fadeIn(900);
    $('#homebox2').hide(0).delay(900).fadeIn(900);
 $('#homebox3').hide(0).delay(900).fadeIn(900);
    $('#homebox4').hide(0).delay(900).fadeIn(900);
    $('#homebox5').hide(0).delay(900).fadeIn(900);
    $('.header').hide(0).delay(300).fadeIn(600);
$('.slogan').hide(0).delay(300).fadeIn(600);
$('.smartmenu,.navtech').hide(0);
$('#techdrop2').mouseenter(function(){
    $('.smartmenu').slideDown(300);
    $('.navtech').show(100);
       $('.navadobe,.navdesign').hide(100);
});
    
    $('#adobedrop2').mouseenter(function(){
    $('.smartmenu').slideDown(300);
    $('.navadobe').show(100);
        $('.navtech,.navdesign').hide(100);
    
});
   
      $('#designdrop2').mouseenter(function(){
    $('.smartmenu').slideDown(300);
    $('.navdesign').show(100);
       $('.navtech,.navadobe').hide(100);
});
   $('.techdrop').click(function(){
       $('.navtech2').toggle(100);
       
   })
      $('.adobedrop').click(function(){
       $('.navadobe2').toggle(100);
       
   })
      $('.designdrop').click(function(){
       $('.navdesign2').toggle(100);
       
   })
    
    $('.navbox').mouseleave(function(){
        
        $('.smartmenu').slideUp(300);
        
    })
      $('#closer1,#closer2,#closer3,#closer4').mouseenter(function(){
        
        $('.smartmenu').slideUp(300);
        
    });
    $('.navtech,.navadobe,.navdesign').show(0);

   $('.menu').click(function(){
       $('#clone,.navli2,.navul2,.smallnav').show(0); $('.menu').hide(10);
       
   });
     $('.closeicon').click(function(){
       $('#clone,.navli2,.navul2,.smallnav').hide(0); $('.menu').show(10);
       
   });
    
   
     
 });  



                       