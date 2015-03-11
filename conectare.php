

<?php

$user_name = "root";
$password = "";
$database = "carti1";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

    $SQL = "SELECT * FROM autori WHERE PRET='8 lei'";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {

echo $db_field['ID'] . "<BR>";
echo $db_field['AUTOR'] . "<BR>";
echo $db_field['CARTE'] . "<BR>";
echo $db_field['ANUL APARITIEI'] . "<BR>";
echo $db_field['PRET'] . "<BR>";
}

mysql_close($db_handle);

}
else {

echo "Database NOT Found ";
mysql_close($db_handle);

}
?>





 
    
    


