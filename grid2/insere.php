<?php
require_once("include/conexao.inc.php");
require_once("include/Clbanco.php");

$nome=$_GET["nome"];
$email=$_GET["email"];
$fone=$_GET["fone"];
	
$cadastro = new banco($conn,$db);
$cadastro->insere("cadastro","(Nome,Email,Telefone)","('$nome','$email','$fone')");

mysql_close($conn);
exit();
?>