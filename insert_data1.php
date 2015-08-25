<?php

$motivul_contactarii = $_POST['motivul_contactarii'];
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$mail = $_POST['mail'];
$telefon = $_POST['telefon'];
$subiect_mesaj = $_POST['subiect_mesaj'];
$mesaj = $_POST['mesaj'];

$connect = new mysqli('localhost', 'root', '', 'hotel');

// verifica conexiunea
if (mysqli_connect_errno()) {
    exit('Connect failed: ' . mysqli_connect_error());
}

// interogare sql cu CREATE DATABASE
$sql = "INSERT INTO clients (MOTIVUL_CONTACTARII,NUME, PRENUME,	MAIL, TELEFON, SUBIECT, MESAJ) VALUES"
    . " ('$motivul_contactarii','$nume',"
    . "'$prenume','$mail','$telefon','$subiect_mesaj','$mesaj')";


if (empty($_POST['nume']) || empty($_POST['prenume']) || empty($_POST['mail']) || empty($_POST['telefon']) || empty($_POST['subiect_mesaj']) || empty($_POST['mesaj'])) {
    echo '<div id = mesaj1>';
    echo "Mesajul nu a fost trimis! Pentru a putea trimite mesajul trebuie sa completati toate campurile!";
    echo '</div>';
}
// executa interogarea $sql pe server pentru a crea baza de date   
elseif ($connect->query($sql) === TRUE) {
    echo '<div id = mesaj>';
    echo 'Mesajul a fost trimis!';
    echo '</div>';
}
$connect->close();
?>