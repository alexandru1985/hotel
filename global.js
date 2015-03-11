$(document).ready(function(){
$('#menu ul li :eq(2)').css('background-color','#FFFFE0').css('color','#008000');  
 var targetElement = $('#menu li a');
   targetElement.click(function(){
   targetElement.removeAttr('style');
       
    $(this).css('background-color','#FFFFE0');
    $(this).css('color','#008000');
  });  
  });  
