<?php
	include_once("conexao.php");

	//se existir o post enviar executa todo o codigo abaixo
	$_POST['icodbovino']             = trim($_POST['icodbovino']);
	$_POST['icodvacina']          = trim($_POST['icodvacina']);

	//"$sql" string para Inserção de Registros na Tabela
	$sql =  "INSERT INTO tblregistrovacina(iCodBovino, iCodVacina, tRegistroVacina)";
	$sql .= "              VALUES ('". $_POST['icodbovino'] ."', '". $_POST['icodvacina'] ."', '". date('Y-m-d H:i:s') ."')"; 
	
	echo '<br />';
	$inserir = mysql_query($sql) or die("Erro ao inserir dados".mysql_error());//o erro ta aki
	
	if($inserir){
		echo 'Inserido com sucesso ';
	}else{
		echo 'Erro ao inserir cadastro';
	}
	
	header('Location: frmprincipal.php');
?>   