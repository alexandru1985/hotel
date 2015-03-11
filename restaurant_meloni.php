<!DOCTYPE html5>
<html>
      <head>
          <title></title>
            <link rel="stylesheet" href="restaurant_meloni.css" type="text/css"/>
              <link rel="stylesheet" href="jquery.lightbox-0.5.css" media="screen" type="text/css"/>
            <script type="text/javascript" src="jquery.js"></script>
            <script type="text/javascript" src="jquery.lightbox-0.5.min.js"></script>
            <script type="text/javascript">
             $(function(){ 
              $('a.lightbox').lightBox();   
                 
             });
             </script>
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
                
              <div id="meloni">
                 <fieldset><legend> <h2><font color="#228B22"> Restaurant Meloni</font></h2></legend> 
                  <p>Daca vrei sa serbezi un eveniment important din viata ta
                  restaurantul <b>Meloni</b> este locul potrivit pentru tine.</p>
                  <p>Va oferim o gama variata de produse proaspete, pregatite de bucatarii
                  nostri experimentati, iar nivelul de servire impecabil este asigurat
                  de personal calificat in domeniu.</p>
                  <p>Echipa noastra de profesionisti in domeniul organizarii evenimentelor, 
                     reprezinta garantia unei inalte calitati gastronomice, precum si a unei
                     inalte calitati estetice.</p>
                  <p>Alcatuirea meniului este flexibila in functie de bugetul dumneavoastra.</p>
                  <p>Cu o capacitate de 230 de locuri, restaurantul <b>Meloni</b> este locul potrivit
                  pentru organizarea de receptii, aniversari, reuniuni private si de afaceri.</p></fieldset>
               </div>
                     <div id="imagine">   
                   <a class ="lightbox" href="poze/meloni1.jpg"> <img src="poze/meloni1.jpg" width="100%" height="100%"></a>

                </div>
                 
                     <div id="galerieImagini"> 
                      
                     <ul>
                         <li><a class ="lightbox" href="poze/meloni2.jpg" ><img src="poze/meloni2.jpg" width="140" height="120" alt="poza"></a></li>
                         <li><a class="lightbox"  href="poze/meloni3.jpg"><img src="poze/meloni3.jpg" width="140" height="120" ></a></li>
                         <li><a class="lightbox"   href="poze/meloni4.jpg"><img src="poze/meloni4.jpg" width="140" height="120"></a></li>
                         <li><a class="lightbox"   href="poze/meloni5.jpg"><img src="poze/meloni5.jpg" width="140" height="120"></a></li>
                     </ul>
                      <ul>
                         <li><a class="lightbox" href="poze/meloni6.jpg"><img src="poze/meloni6.jpg" width="140" height="120"></a></li>
                         <li><a class="lightbox"   href="poze/meloni7.jpg"><img src="poze/meloni7.jpg" width="140" height="120"></a></li>
                         <li><a class="lightbox"   href="poze/meloni8.jpg"><img src="poze/meloni8.jpg" width="140" height="120"></a></li>
                         <li><a class="lightbox"    href="poze/meloni9.jpg"><img src="poze/meloni9.jpg" width="140" height="120"></a></li>
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
