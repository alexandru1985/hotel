
<!DOCTYPE html5>
<html>
      <head>
          <title></title>
            <link rel="stylesheet" href="evenimente_corporate.css" type="text/css"/>
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
$('#menu ul li :eq(4)').css('background-color','#FFFFE0').css('color','#008000');  
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
            <div id="header"><h2>Evenimente</h2>
            </div>
             <div id="container">
                 
                 <div id="eveniment">
                    <h4><font size="+1"><font color=#228B22>Evenimente corporate</font></font></h4>
                    <p>Proiectat cu eleganta si rafinament, <b>centrul</b> nostru de <b>conferinte</b> este un loc
                       potrivit pentru intalniri <b>business</b> ce are in vedere cele mai exigente cerinte ale clientilor.</p>
                    <p>Salile noastre dotate cu echipamente performante, ofera posibilitatea organizarii mai multor activitati: 
                       <b>intalnire de afaceri</b>, o lansare de produs, o <b>conferinta</b> sau un <b>training</b> cu angajatii.</p>
                </div>
                    <div id="eveniment1">
                        <p>Cele 3 sali de conferinta, <b>Venus,</b> <b>Mercur</b> si <b>Uranus</b>  
                           sunt modulare. Acestea se pot transforma intr-o singura sala de plen cu o capacitate maxima de 190 de persoane si un aranjament de tip teatru.
                        </p>
                        <p>Va prezentam capacitatea fiecarei sali in functie de aranjament, urmand ca dumneavoastra sa decideti
                          sala potrivita pentru evenimentul pe care doriti sa il organizati.
                        </p>
                    </div>
                                <div id="imagine">   
               <img src="poze/boardroom2.jpg" id="img">
                <div id="left"><img onClick="slide(-1)"></div>
                      <div id="right"><img onClick="slide(1)" ></div>

                </div>
                 
                     <div id="eveniment2"> 
                           
                       <table class="tabel">
                          <tr>
                             <th height="110"></th>
                             <th><img src="poze/theatre.gif" width="90" height="110"></th>
                             <th><img src="poze/classroom.gif" width="90" height="110"></th>
                             <th><img src="poze/ushape.gif" width="90" height="110"></th> 
                             <th><img src="poze/boardroom.gif" width="90" height="110"></th> 
                        </tr>  
                        <tr>
                             <th>Sala</th>
                             <th>Teatru</th>
                             <th>Classroom</th>
                             <th>U-shape</th> 
                             <th>Boardroom</th> 
                        </tr>
                             <tr>
                                <td>Venus</td>
                                <td><center>60</center></td>
                                <td><center>30</center></td>
                                <td><center>25</center></td>
                                <td><center>32</center></td>
                             </tr>
                                <tr>
                                    <td>Mercur</td> 
                                    <td><center>50</center></td>
                                    <td><center>25</center></td>
                                    <td><center>20</center></td>
                                    <td><center>26</center></td>
                                 </tr>
                                     <tr>
                                        <td>Uranus</td> 
                                        <td><center>55</center></td>
                                        <td><center>28</center></td>
                                        <td><center>23</center></td>
                                        <td><center>30</center></td>
                                    </tr>
                                        <tr>
                                          <td>V.M.U.</td>
                                          <td><center>190</center></td>
                                          <td><center>80</center></td>
                                          <td><center>65</center></td>
                                          <td><center>75</center></td>
                                        </tr>
                            </table> 
                     </div>
                <div id="eveniment3">  <h4><font size="+1"><font color=#228B22>Va oferim urmatoarele servicii</font></font></h4>
                    <ul type="square">
                          <li style="color:#228B22"><font color="black">Sala de receptie, cu aer conditionat</font></li>
                          <li style="color:#228B22"><font color="black">Decoratii specifice: de la huse pentru scaune la iluminari specifice</font></li>
                          <li style="color:#228B22"><font color="black">Consultanta privind orice detaliu: invitatii, aranjamente (florale, cu baloane, etc.), artificii, fotografi, echipa de filmare, muzica</font></li>
                          <li style="color:#228B22"><font color="black">Pentru mai mult de 120 de persoane oferim intampinarea invitatilor cu muzica de pian</font></li>
                    </ul>
                </div> 
                    <div id="eveniment5">
                        <p>Pentru rezervari si informatii suplimentare va rugam sa ne contactati folosind
                            <b><u><font color="#228B22">formularul de contact</font></u></b> din pagina de 
                            <b><u><font color="#228B22">Contact</font></u></b>.
                        </p>    
                </div> 
                 <div id="eveniment15">
         <div id="eveniment6"><a href="nunti.php"><b>Nunti si botezuri</b></a></div>
                 <div id="eveniment7"><a href="receptii.php"><b>Receptii</b></a></div>
                 <div id="eveniment8"><a href="evenimente_corporate.php"><b>Evenimente corporate</b></a></div>
                 <div id="eveniment9"><a href="nunti.php"><img src="poze/imagine2.jpg" width="111%" height="135%"></a> </div>
                 <div id="eveniment10"><a href="receptii.php"><img src="poze/imagine3.jpg" width="111%" height="135%"></a>  </div>
                 <div id="eveniment11"><a href="evenimente_corporate.php">
                       <img src="poze/boardroom1.jpg" width="111%" height="135%"></a>
                 </div>
              </div>
            </div>
     </body>
</html>






