
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



if(isset($_POST['sub'])){
$client = $_POST['client'];
$telefon = $_POST['telefon'];
$mail = $_POST['mail'];
$numar_zile = $_POST['numar_zile'];
$data = $_POST['data'];
$tipul_camerei = $_POST['tipul_camerei'];
$mesaj = $_POST['mesaj'];



}


$connect = new mysqli('localhost', 'root', '', 'hotel');

// verifica conexiunea
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// interogare sql cu CREATE DATABASE
$sql = "INSERT INTO comenzi (CLIENT, TELEFON, MAIL, NUMAR_ZILE, DATA, TIPUL_CAMEREI,MESAJ) VALUES ('$client', '$telefon','$mail','$numar_zile','$data','$tipul_camerei','$mesaj')";
if(empty($_POST['client'])||empty($_POST['telefon'])||empty($_POST['mail'])||empty($_POST['numar_zile'])
    ||empty($_POST['data'])||empty($_POST['tipul_camerei'])||empty($_POST['mesaj']))
    {   echo '<div id=mesaj2>'; 
    echo "Rezervarea nu a fost trimisa! Pentru a putea trimite rezervarea trebuie sa completati toate campurile!";
      echo '</div>';  
    
    }
// executa interogarea $sql pe server pentru a crea baza de date
elseif ($connect->query($sql) === TRUE) {
 echo '<div id=mesaj>';  
  echo 'Rezervarea a fost trimisa!';
  echo '</div>';  
}

$connect->close();
?>