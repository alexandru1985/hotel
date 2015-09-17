<!DOCTYPE html5>

<html>
    <head>
        <title>Prima pagina</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <script type="text/javascript"src="index.js"></script> 
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script> 
        <script type="text/javascript">
             var imagecount = 1;
             var total = 5;
             
             function slide(x) {
             var Image = document.getElementById('img');
             imagecount = imagecount + x;
             if(imagecount > total) {imagecount= 1;}
             if(imagecount < 1) {imagecount= total;}
             Image.src ="poze/imagine_index" + imagecount + ".jpg";}
         
             window.setInterval(
             function slideA() {
             var Image = document.getElementById('img');
             imagecount = imagecount + 1;
             if(imagecount > total) {imagecount= 1;}
             if(imagecount < 1) {imagecount= total;}
             Image.src ="poze/imagine_index" + imagecount + ".jpg";},3000);
        </script>
    </head>
    <body onLoad="slideA()">
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
                <script type="text/javascript"src="index.js"></script> 

            </div>
        </div>     
        <div id="imagini"><img src="poze/imagine_index1.jpg" id="img">
            <div id="left"><img onClick="slide(-1)" src="poze/left.png" class="left1"></div>
            <div id="right"><img onClick="slide(1)" src="poze/right.png" class="right1"></div>
        </div>
        <div id="oferte_speciale"><b> 30%</b>
        </div>
        <div id="oferte_speciale1">
            &nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;reducere  <br> &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;pana la data 
            <br>  &nbsp;&nbsp;&nbsp; &nbsp;de 15.12.2014</div>
        <div id="container">

            <div id="camere">
                <a href="camere.php">Camere</a>
            </div>
            <div id="restaurant">
                <a href="restaurant_bistrot.php">Restaurant si Bar</a>
            </div>
            <div id="oferte">
                <a href="oferte.php">Oferte speciale</a> 
            </div>
            <div id="data">
                <iframe style = "width: 271.2px; height: 240px; margin-left:-15px; margin-top:-5px; " frameborder="0" marginwidth="0" marginheight="0" scrolling="no" src="http://www.cursvalutar.ro/widget/?w=272&cft=ffff00&ctt=000000&cc=ffff00&cfb=ffff00&ct=000000&val=EUR,USD,CHF,GBP&font=15&logo=off&bold=bold&var=on&ct_b=bold&con=on&undefined=undefined"></iframe>
            </div>
            <div id="camere1">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Cele 110 camere si apartamente ale hotelului River sunt dotate conform standardelor internationale. Acestea au fost special decorate cu piese de mobilier.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="camere.php"mai multe detalii>mai multe detalii>></a></p>
            </div>
            <div id="restaurant1">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Restaurantul Bistrot, este locatia ideala pentru o intalnire de afaceri, o intalnire cu prietenii, o cina romantica sau festiva.

                    Va asteptam sa degustati din preparatele traditionale.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="restaurant_bistrot.php"mai multe detalii>mai multe detalii>></a></p>
            </div>
            <div id="oferte1">
                <p>&nbsp;&nbsp; Puteti beneficia de reduceri importante daca achizitionati un pachet cu minim 5 nopti de cazare
                    pana la data de 25.11.2014. Ofertele se pot negocia pentru companii.</p> 
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="oferte.php"mai multe detalii>mai multe detalii>></a></p>
            </div>

        </div>
    </body>
</html>
