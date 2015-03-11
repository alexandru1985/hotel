<?php

if(isset($_POST['client1']) === true && empty($_POST['client1']) === false){
    
   require 'conectare1.php'; 
   $query = mysql_query("SELECT `comenzi`.`TIPULCAMEREI` FROM `comenzi` WHERE `comenzi`.`client1`='".mysql_real_escape_string(trim($_POST['client1']))."'"); 
   
    if(mysql_num_rows($query) !==0){echo "Orasul este: ".mysql_result($query, 0,'TIPULCAMEREI');} 
     else{echo 'Name not found';}

}



?>