<form  action="" method="post">
Tipul Camerei: <br />
<input type="text" name="tipul_camerei" /> <br />
Tarife: <br />
<input type="text" name="tarife" /> <br />
Tarife Weekend: <br />
<input type="text" name="tarife_weekend" /> <br />


<br/><br/>


<input type="submit" value="Trimite" name="Trimite" />
</form>
<?php
if( isset( $_POST['Trimite'])) 
{
	if (strlen(trim($_POST[ 'tipul_camerei' ]))<1) echo "scrie ceva!";
	elseif (strlen(trim($_POST[ 'tarife' ]))<1) echo "scrie ceva!";
	elseif (strlen(trim($_POST[ 'tarife_weekend' ]))<1) echo "scrie ceva!";
	else
	{
	mysql_query("
	INSERT INTO users (tipul_camerei, tarife, tarife_weekend) VALUES ('{$_POST['tipul_camerei']}','{$_POST['tarife']}','{$_POST['tarife_weekend']}'");
	}
}
?>