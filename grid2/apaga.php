<?php
require_once("include/conexao.inc.php");
require_once("include/Clbanco.php");

$id=$_GET["id"];
	
$cadastro = new banco($conn,$db);
$cadastro->apaga("cadastro","$id");

mysql_close($conn);
exit();
?>