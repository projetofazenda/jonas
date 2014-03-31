<?php
	include_once("conexao.php");

	//se existir o post enviar executa todo o codigo abaixo
	$_POST['dvalor']             = trim($_POST['dvalor']);
	$_POST['tdataven']          = trim($_POST['tdataven']);
	$_POST['icodcondicaopagam']   = trim($_POST['icodcondicaopagam']);

	//"$sql" string para Inserção de Registros na Tabela
	$sql =  "INSERT INTO tblvenda(dValor, tDataVen, iCodCondicaoPagam)";
	$sql .= "              VALUES ('". $_POST['dvalor'] ."', '". $_POST['tdataven'] ."', '". $_POST['icodcondicaopagam'] ."')"; 
	
	echo '<br />';
	$inserir = mysql_query($sql) or die("Erro ao inserir dados".mysql_error());//o erro ta aki
	
	if($inserir){
		echo 'Inserido com sucesso ';
	}else{
		echo 'Erro ao inserir cadastro';
	}
	
	header('Location: frmprincipal.php');
?>   