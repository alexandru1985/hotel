<!DOCTYPE html5>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="contact.css" type="text/css"/>
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script type="text/javascript"src="contact.js"></script> 
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
                <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script> 
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#menu > ul > li:nth-child(8) > a:eq(0)').css('background-color', '#FFFFE0').css('color', '#008000');
                        var targetElement = $('#menu li a');
                        targetElement.click(function() {
                            targetElement.removeAttr('style');

                            $(this).css('background-color', '#FFFFE0');
                            $(this).css('color', '#008000');
                        });
                    });
                </script>  
            </div>
        </div>  
        <div id="header"><h2>Detalii de contact</h2>
        </div>
        <div id="container">
            <div id="contact">
                <h4><font size="+1"><font color=#228B22>Formular de contact</font></font></h4>
                <form action="insert_data.php" method="post">              
                    <table>
                        <tr>
                            <td>Motivul contactarii</td>
                            <td><select name="motivul_contactarii"><option value="alege subiect">- Alege subiect -<option value="rezervari individuale">Rezervari individuale<option value="rezervari grupuri">Rezervari grupuri
                                    <option value="conferite si seminarii">Conferinte si seminarii<option value="nunti, botezuri, aniversari">Nunti, botezuri, aniversari</select></td>
                        </tr>
                        <tr>
                            <td width="160">Nume</td>
                            <td width="200"><input type="text" name="nume"></td>
                        </tr>
                        <tr>
                            <td>Prenume</td>
                            <td><input type="text" name="prenume"></td>
                        </tr>
                        <tr>
                            <td>Adresa de e-mail</td>
                            <td><input type="text" name="mail"></td>
                        </tr>
                        <tr>
                            <td>Telefon</td>
                            <td><input type="text" name="telefon"></td>
                        </tr>
                        <tr>
                            <td>Subiectul mesajului</td>
                            <td><input type="text" name="subiect_mesaj"></td>
                        </tr>
                        <tr>
                            <td>Mesaj</td>
                            <td height="100"><textarea name="mesaj" rows="5" cols="30"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Trimite" id="submit">
                                <input type="reset" value="Sterge" id="reset"></td>
                        </tr>
                    </table> 

                </form>       
            </div>

            <div id="date_contact"> 
                <input type="button" value="Afiseaza date de contact" id="afiseaza"> 

            </div>     
            <div id="contact1">


                <h4><font size="+1"><font color=#228B22>Date de contact</font></font></h4>
                <br><b>Adresa</b>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strada  Fagului nr.15
                <br >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brasov, Romania
                <br><b>Adresa Web</b>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=#228B22><b>www.hotelriver.com</b></font>
                <br><b>E-mail</b>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=#228B22><b>office@hotelriver.com</b></font>
                <br><b>Sales&Marketing</b>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=#228B22><b>marketing@hotelriver.com</b></font>
                <br><b>Telefon</b>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+4(0)268 55 85 75
            </div> 

        </div>

    </body>
</html>
<?php
include("Data.php");
Data::counterPage();
?>