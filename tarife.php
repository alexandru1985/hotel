<!DOCTYPE html5>
<html>
      <head>
          <title></title>
            <link rel="stylesheet" href="tarife.css" type="text/css"/>
          
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
$('#menu ul li :eq(3)').css('background-color','#FFFFE0').css('color','#008000');  
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
          <div id="header"><h2>Tarife</h2>
                        </div>
             <div id="container">
              
 
            
                 
     </div>     
          
          
          
          
       
          
          
          
          
        </body>
</html>

<?php
error_reporting(0);
mysql_connect("localhost", "root" , "") or die(mysql_error());
mysql_select_db("hotel") or die(mysql_error());

//daca se sterge
if( isset( $_POST['sterge']))
{
mysql_query("delete from users where id='{$_POST['id']}'");
} 



//codul pentru salvare
if( isset( $_POST['salveaza'])) 
{
	if (strlen(trim($_POST[ 'tipul_camerei' ]))<1) echo "scrie ceva la tipul camerei!";
	elseif (strlen(trim($_POST[ 'tarife' ]))<1) echo "scrie ceva la tarife!";
	elseif (strlen(trim($_POST[ 'tarife_weekend' ]))<1) echo "scrie ceva la tarife week-end!";
	else
	{
	mysql_query("
	update users set tipul_camerei='{$_POST['tipul_camerei']}', tarife='{$_POST['tarife']}',tarife_weekend='{$_POST['tarife_weekend']}' where id='{$_POST['id']}'");
	}
}


?>


<?php
$q=mysql_query("select * from users order by id desc");
echo "<div id=tabel2>";
echo "<table id=tabel1 border=1  cellpadding=7 width=50%><tr><th>Tipul camerei</th><th>Luni - Joi</th><th>Vineri - Duminica</th><th>Stergere date</th><th>Modificare date</th></tr>";

while ($d=mysql_fetch_row($q))
	{
	if (isset($_POST['modifica']) && $_POST['id']==$d[0])
	{
	//aici vine partea de editare
	echo "<tr>
	<form method=post>

	<td><input name='tipul_camerei' type=text size=10 value='{$d[1]}' ></td>
	<td><input name='tarife' size=10  type=text value='{$d[2]}' ></td>
	<td><input name='tarife_weekend' size=10 type=text value='{$d[3]}' ></td>

	<td><input type=hidden name=id value='{$d[0]}' ><input type=submit name=salveaza value=salveaza></td></form><form method=post><td><input type=hidden name=id value='{$d[0]}' ><input type=submit name=sterge value=sterge></td></form></tr>";
	}
	else
echo "<tr><td>{$d[1]}</td><td>{$d[2]}</td><td>{$d[3]}</td><form method=post><td><input type=hidden name=id value='{$d[0]}' ><input type=submit name=sterge value=sterge></td></form><form method=post><td><input type=hidden name=id value='{$d[0]}' ><input type=hidden name=edit value=da ><input type=submit name=modifica value=modifica></td></form></tr>";
	}

echo "</table>";
echo "</div>";

?>

<?php

include("counter.php");

?>