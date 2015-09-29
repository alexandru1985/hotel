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

         </body>
     </html>

<?php
include 'Data.php';

$obj = new Data();


if (isset($_POST['submit'])) {
    $motivul_contactarii = $_POST['motivul_contactarii'];
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $mail = $_POST['mail'];
    $telefon = $_POST['telefon'];
    $subiect_mesaj = $_POST['subiect_mesaj'];
    $mesaj = $_POST['mesaj'];
    $obj->validateContact($nume,$prenume,$telefon,$subiect_mesaj);
    $obj->validateMail($mail);
    $res = $obj->insertContact($motivul_contactarii, $nume, $prenume, $mail, $telefon, $subiect_mesaj, $mesaj);
    echo("Mesajul a fost trimis!");
}

if (isset($_POST['save'])) {
    $client = $_POST['client'];
    $telefon = $_POST['telefon'];
    $mail = $_POST['mail'];
    $numar_zile = $_POST['numar_zile'];
    $data = $_POST['data'];
    $tipul_camerei = $_POST['tipul_camerei'];
    $mesaj = $_POST['mesaj'];

    $res = $obj->inserReservation($client, $telefon, $mail, $numar_zile, $data, $tipul_camerei, $mesaj);
    if ($res) {
        ?>
        <script>
            alert('Mesajul a fost trimis!');
            window.location = 'rezervari.php'
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Mesajul nu a fost trimis!');
            window.location = 'rezervari.php'
        </script>
        <?php
    }
}
?>

