
<!DOCTYPE html5>
<html>
      <head>
          <title></title>
          <link rel="stylesheet" href="insert_data.css" type="text/css"/>
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
            </div>
        </div>  
       </body>
</html>      


<?php
$motivul_contactarii =$_POST['motivul_contactarii'];
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$mail = $_POST['mail'];
$telefon = $_POST['telefon'];
$subiect_mesaj = $_POST['subiect_mesaj'];
$mesaj=$_POST['mesaj'];

$connect = new mysqli('localhost', 'root', '', 'hotel');

// verifica conexiunea
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// interogare sql cu CREATE DATABASE
$sql = "INSERT INTO clients (MOTIVUL_CONTACTARII,NUME, PRENUME,	MAIL, TELEFON, SUBIECT, MESAJ) VALUES ('$motivul_contactarii','$nume',"
    . "'$prenume','$mail','$telefon','$subiect_mesaj','$mesaj')";


if(empty($_POST['nume'])||empty($_POST['prenume'])||empty($_POST['mail'])||empty($_POST['telefon'])
    ||empty($_POST['subiect_mesaj'])||empty($_POST['mesaj']))
    {   echo '<div id=mesaj1>'; 
    echo "Mesajul nu a fost trimis! Pentru a putea trimite mesajul trebuie sa completati toate campurile!";
      echo '</div>';  
    
    }
 // executa interogarea $sql pe server pentru a crea baza de date   
elseif ($connect->query($sql) === TRUE) {
  echo '<div id=mesaj>';  
  echo 'Mesajul a fost trimis!';
  echo '</div>';  
}





$connect->close();
?>