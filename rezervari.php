<!DOCTYPE html5>


<html>
      <head>
          <title></title>
            <link rel="stylesheet" href="rezervari.css" type="text/css"/>
            <script type="text/javascript"src="global.js"> </script> 
                  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"> </script> 
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
               <script type="text/javascript"src="global.js"> </script> 
                  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"> </script>   
            </div>
        </div> 
             <div id="header"><h2>Rezervari</h2>
                        </div>
        <div id="container">
            
            <div id="rezervari">
                <h4><font size="+1">Modalitati de plata: </font></h4>
             <ul>
                 <li>transfer bancar</li>
                 <li>cash la Receptie</li>
                 <li>carte de credit (MasterCard, Visa)</li>
             </ul>
          <p>Plata se poate face in LEI sau valuta (EURO si USD) la cursul stabilit de
             BNR din ziua respectiva.</p>
          <p>Rezervarile sunt garantate de catre hotel pana la ora 22.00 - data 
            sosirii si vor fi anulate daca nu sunt confirmate cu cel putin o zi
             inainte.</p>
          <p>Puteti face rezervari prin trimiterea solicitarii 
              pe adresa de e-mail: <b>rezervations@riverhotel.com</b></p>
            </div>
            <div id="formular">
                  <h3><font color="#228B22" size="4.3"> Formular rezervare</font></h3>
             <form action="insert_data1.php" method="post">              
                         <table>
                            <tr>
                                <td>Client</td>
                                  <td width="200"><input type="text" name="client"></td>
                            </tr>
                                <tr>
                                    <td width="160">Telefon</td>
                                    <td width="200"><input type="text" name="telefon"></td>
                                </tr>
                                     <tr>
                                        <td>Mail</td>
                                         <td><input type="text" name="mail"></td>
                                     </tr>
                                     
                                        <tr>
                                            <td>Nr. zile</td>
                                            <td><input type="text" size="1" name="numar_zile"> data <input type="date" size="1" name="data"></td>
                                        </tr>
                                             <tr>
                                                 <td>Tipul camerei</td>
                                                 <td><select name="tipul_camerei">
                                    <option value=" Camera Single" >Camera Single</option>
                                    <option value=" Camera Dubla">Camera Dubla</option> 
                                    <option value=" Junior Suite">Junior Suite</option>
                                    <option value=" Apartament">Apartament</option>
                                                     </select></td>
                                          
                                             </tr>
                                             
                                                    <tr>
                                                        <td>Mesaj</td>
                                                        <td height="100"><textarea name="mesaj" rows="5" cols="30"></textarea></td>
                                                    </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td><input type="submit" id="submit" name = "sub" value="Trimite"></td>
                                                               
                                                        </tr>
                            </table> 
                    </form>     
              
              
              
              
          </div> 
             
           
         </div>
        
     </body>
  
</html>    


