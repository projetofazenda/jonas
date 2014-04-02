<?php
require_once("include/conexao.inc.php");
require_once("include/Clbanco.php");

$id=$_GET["id"];
$nome=$_GET["nome"];
$email=$_GET["email"];
$fone=$_GET["fone"];
	
$cadastro = new banco($conn,$db);
$cadastro->altera("cadastro","Nome='$nome',Email='$email',Telefone='$fone'","$id");

mysql_close($conn);
exit();
?>