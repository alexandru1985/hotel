<!DOCTYPE html5>
<html>
      <head>
          <title></title>
          <link rel="stylesheet" href="restaurant_bistrot.css" type="text/css"/>
      
      </head>
    <body>
        <div id="denumire">
            <b>Hotel River</b> 
        </div>
          <div id="denumire_poza">
              <img src="poze/poza_index.jpg" width="100%" height="100%"  >
               </div>
        <div id="baraOrizontala">     
             <div id="menu">    
                 <ul> 
                    <li><a href="index.php">Acasa</a></li>
                    <li><a href="cazare_hotel.php">Despre hotel</a></li>
                    <li><a href="rezervari.php">Rezervari</a></li>
                    <li><a href="tarife.php">Tarife</a></li>
                    <li><a href="nunti.php">Evenimente</a>
                        <ul><li><a href="nunti.php">&nbsp;&nbsp;&nbsp;&nbsp;Nunti</a></li>
                                <li><a href="receptii.php">&nbsp;&nbsp;&nbsp;&nbsp;Receptii</a></li> 
                                <li><a href="evenimente_corporate.php">&nbsp;&nbsp;&nbsp;&nbsp;Evenimente corporate</a>
                        </ul></li> 
                                <li><a href="restaurant_bistrot.php">Restaurante</a>
                        <ul><li><a href="restaurant_bistrot.php">&nbsp;&nbsp;&nbsp;&nbsp;Restaurant Bistrot</a></li>
                                <li><a href="restaurant_canevo.php">&nbsp;&nbsp;&nbsp;&nbsp;Restaurant Canevo</a></li> 
                                <li><a href="restaurant_meloni.php">&nbsp;&nbsp;&nbsp;&nbsp;Restaurant Meloni</a></li> 
                        </ul></li> 
                                <li><a href="">Atractii turistice</a></li> 
                                <li><a href="contact.php">Contact</a></li>
                </ul>
                         <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"> </script> 
                       <script type="text/javascript">
  $(document).ready(function(){
$('#menu > ul > li:nth-child(6) > a:eq(0)').css('background-color','#FFFFE0').css('color','#008000');  
 var targetElement = $('#menu li a');
   targetElement.click(function(){
   targetElement.removeAttr('style');
       
    $(this).css('background-color','#FFFFE0');
    $(this).css('color','#008000');
  });  
  });  
</script>  
                 
            </div>
        </div>      
          <div id="header"><h2>Restaurante</h2>
                        </div>
             <div id="container">
                
                 
              <div id="bistrot">
                  <fieldset><legend><h2><font color="#228B22"> Restaurant Bistrot</font></h2></legend>
                  <p>Restaurantul <b>Bistrot</b>, este locatia ideala pentru o intalnire
                      de afaceri, o intalnire cu prietenii, o cina romantica sau festiva.
                    </p>
                    <p>Va asteptam sa degustati din preparatele traditionale, pregatite cu 
                     maiestrie de bucatarii nostri profesionisti.</p>
                     <p>Confortul, eleganta si calitatea serviciilor oferite fac din
                     restaurantul <b>Bistrot</b>, un loc special pentru petrecerea timpului
                     dumneavoastra.</p>
                     <p><b>Bistort</b> este un restaurant care poate gazdui pana la 70 de invitati.</p> </fieldset>
              </div>
                <div id="imagine">   
                   <a class ="lightbox" href="poze/bistrot1.jpg"> <img src="poze/bistrot1.jpg" width="100%" height="100%"></a>

                </div>
                  <div id="galerieImagini">  
                     <ul>
                         <li><a class ="lightbox" href="poze/bistrot2.jpg" ><img src="poze/bistrot2.jpg" width="140" height="120" alt="restaurant"></a></li>
                         <li><a class="lightbox"  href="poze/bistrot3.jpg"><img src="poze/bistrot3.jpg" width="140" height="120" alt="Poza boardroom"></a></li>
                         <li><a class="lightbox"   href="poze/bistrot4.jpg"><img src="poze/bistrot4.jpg" width="140" height="120"></a></li>
                         <li><a class="lightbox"   href="poze/bistrot5.jpg"><img src="poze/bistrot5.jpg" width="140" height="120"></a></li>
                     </ul>
                      <ul>
                         <li><a class="lightbox" href=poze/"bistrot6.jpg"><img src="poze/bistrot6.jpg" width="140" height="120"></a></li>
                         <li><a class="lightbox"   href="poze/bistrot7.jpg"><img src="poze/bistrot7.jpg" width="140" height="120"></a></li>
                         <li><a class="lightbox"   href="poze/bistrot8.jpg"><img src="poze/bistrot8.jpg" width="140" height="120"></a></li>
                         <li><a class="lightbox"    href="poze/bistrot9.jpg"><img src="poze/bistrot9.jpg" width="140" height="120"></a></li>
                     </ul>  
                 </div>
                    <div id="eveniment6"><a href="restaurant_bistrot.php"><b>Restaurant Bistrot</b></a></div>
                 <div id="eveniment7"><a href="restaurant_canevo.php"><b>Restaurant Canevo</b></a></div>
                 <div id="eveniment8"><a href="restaurant_meloni.php"><b>Restaurant Meloni</b></a></div>
                 <div id="eveniment9"><a href="restaurant_bistrot.php"><img src="poze/bistrot1.jpg" width="111%" height="135%"></a> </div>
                 <div id="eveniment10"><a href="restaurant_canevo.php"><img src="poze/canevo1.jpg" width="111%" height="135%"></a>  </div>
                <div id="eveniment11"><a href="restaurant_meloni.php">
                        <img src="poze/meloni1.jpg" width="111%" height="135%"></a>
                  
              </div>
              </div>
        </body>
</html>
