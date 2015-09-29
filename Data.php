<?php

class Data
{

    private $conn;

    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'hotel') or die('Eroare de conectare!' . mysql_error());
    }

    public function insertContact($motivul_contactarii, $nume, $prenume, $mail, $telefon, $subiect_mesaj, $mesaj)
    {
        $res = mysqli_query($this->conn, "INSERT INTO clients (MOTIVUL_CONTACTARII,NUME, PRENUME, MAIL, TELEFON, SUBIECT, MESAJ) VALUES"
            . " ('$motivul_contactarii','$nume'," . "'$prenume','$mail','$telefon','$subiect_mesaj','$mesaj')");
        return $res;
    }

    public function insertReservation($client, $telefon, $mail, $numar_zile, $data, $tipul_camerei, $mesaj)
    {
        $res = mysqli_query($this->conn, "INSERT INTO comenzi (CLIENT, TELEFON, MAIL, NUMAR_ZILE, DATA, TIPUL_CAMEREI, MESAJ) VALUES"
            . " ('$client', '$telefon','$mail','$numar_zile','$data','$tipul_camerei','$mesaj')");
        return $res;
    }

    public function validateContact($nume, $prenume, $telefon, $subiect_mesaj)
    {
        if (!preg_match("/^[a-zA-Z]*$/", $nume) || empty($nume)) {
            echo("Se pot utiliza doar litere in interiorul campului nume sau campul nu a fost completat!");
            exit;
        }
        if (!preg_match("/^[a-zA-Z]*$/", $prenume) || empty($prenume)) {
            echo("Se pot utiliza doar litere in interiorul campului prenume sau campul nu a fost completat!");
            exit;
        }
        if (!preg_match("/^[0-9]*$/", $telefon) || empty($telefon)) {
            echo("Se pot utiliza doar cifre in interiorul campului telefon sau campul nu a fost completat!");
            exit;
        }
        if (!preg_match("/^[a-zA-Z]*$/", $subiect_mesaj) || empty($subiect_mesaj)) {
            echo("Se pot utiliza doar litere in interiorul campului subiect mesaj sau campul nu a fost completat!");
            exit;
        }
    }

    public function validateMail($mail)
    {
        if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false || empty($mail)) {
            echo("Adresa de mail nu este corecta sau campul nu a fost completat!");
            exit;
        }
    }

    public static function counterPage()
    {
        $count_my_page = ("hitcounter.txt");
        $hits = file($count_my_page);
        $hits[0]++;
        $fp = fopen($count_my_page, "w");
        fputs($fp, "$hits[0]");
        fclose($fp);
        echo $hits[0];
    }

    public static function downloadFile()
    {
        $file = 'oferta_pret.docx';

        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        }
    }

}
