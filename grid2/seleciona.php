<?php
require_once("include/conexao.inc.php");
require_once("include/Clbanco.php");
	
$cadastro = new banco($conn,$db);
$data=$cadastro->seleciona("cadastro");

//se encontrar registros	
if(mysql_num_rows($data)){
	header("Content-type: application/xml"); 
		
	$xml="<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>";  
	
	//preenchimento da Array com o nome dos campos
	for($i=0;$i < mysql_num_fields($data);$i++){
		$campos[$i]=mysql_field_name($data,$i);
	}	
	
	$xml.="<dados>";
	$xml.="<cabecalho>";
	
	//cabecalho da tabela
	for($i=0;$i < sizeof($campos);$i++){
		$xml.="<campo>".$campos[$i]."</campo>";
	}
	
	$xml.="</cabecalho>";
	
	//corpo da tabela
	while($row=mysql_fetch_object($data)){
		$xml.="<registro>";
		for($i=0;$i < sizeof($campos);$i++){
			$xml.="<item>".$row->$campos[$i]."</item>";
		}
		$xml.="</registro>";		
	}
	
	//fim da tabela
	$xml.="</dados>";	
}

echo $xml;
mysql_close($conn);
exit();
?>