<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php

$host = "localhost"; // Host valor padrão é localhost

$usuariodb="root"; //Usuario de Conexao com  o MySQL

$senhadb=""; // Senha de Conexao com o MySQL

$db="bovinos"; //Banco de Dados MySQL


$conexao=mysql_connect ("$host", "$usuariodb", "$senhadb") or die ('não foi possivel!Erro: ' . mysql_error());
mysql_select_db ("$db") or die("não foi possivel conectar!");
?>

</body>
</html>