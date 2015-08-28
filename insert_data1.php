<?php

if (isset($_POST['sub'])) {
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
    exit('Connect failed: ' . mysqli_connect_error());
}

// interogare sql cu CREATE DATABASE
$sql = "INSERT INTO comenzi (CLIENT, TELEFON, MAIL, NUMAR_ZILE, DATA, TIPUL_CAMEREI, MESAJ) VALUES"
    . " ('$client', '$telefon','$mail','$numar_zile','$data','$tipul_camerei','$mesaj')";
if (empty($_POST['client']) || empty($_POST['telefon']) || empty($_POST['mail']) || empty($_POST['numar_zile']) ||
    empty($_POST['data']) || empty($_POST['tipul_camerei']) || empty($_POST['mesaj'])) {
    echo '<div id=mesaj2>';
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