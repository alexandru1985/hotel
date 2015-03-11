
<!DOCTYPE html5>
    
<html>
      <head>
          <title></title>
            <link rel="stylesheet" href="cazare_hotel.css" type="text/css"/>
       
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
$('#menu ul li :eq(1)').css('background-color','#FFFFE0').css('color','#008000');  
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
            <div id="header"><h2>Despre Hotel</h2>
            </div>
                <div id="container">
                    <div id="despre_hotel">
                        <h4><font size="+1">Despre Hotel</font></h4>
                            <p> Situat in centrul orasului Brasov, la 5 minute de mers pe 
                                jos de Piata Sfatului, hotelul exceleaza prin calitatea si 
                                serviciile oferite.
                            </p>
                        <h4><font>Hotelul pune la dispozitia clientilor sai urmatoarele:</font></h4>
                            <ul>
                                <li>Cazare in 110 camere (single, dubla twin, junior suite, apartament);</li>
                                <li>Centru de conferinte: 3 sali de conferinta cu o capacitate maxima de 70 persoane, fiecare;</li>
                                <li>Restaurant Meloni, cu o capacitate de 230 persoane;</li>
                                <li>Restaurant Bistrot, cu o capacitate de 70 persoane;</li>  
                                <li>Restaurant Canevo, cu o capacitate de 90 persoane;</li>
                                <li>Centru de sanatate: sauna, sala de fitness, sala de relaxare cu fotolii termo-reglabile;</li>
                                <li>Parcare exterioara - 80 locuri.</li>
                            </ul>
                        <h4><font>Servicii si facilitati</font></h4>
                            <ul>
                                <li>Acces gratuit la internet;</li>
                                <li>Bancomat;</li>
                                <li>Acces gratuit la centrul de sanatate;</li>
                                <li>Parcare gratuita;</li>
                                <li>Servicii de fax si curierat;</li>
                                <li>Servicii de spalatorie;</li>
                                <li>Transportul bagajelor.</li>
                            </ul>
                   </div>
                   
              </div>
      
        
     </body>
</html>
