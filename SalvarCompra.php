<?php
	include_once("conexao.php");

	//se existir o post enviar executa todo o codigo abaixo
	$_POST['dvalor']             = trim($_POST['dvalor']);
	$_POST['icodcodicaopagam']   = trim($_POST['icodcodicaopagam']);
	$_POST['bprodutovivo']       = trim($_POST['bprodutovivo']);
	
	//"$sql" string para Inserção de Registros na Tabela
	$sql =  "INSERT INTO tblcompra(dValor, tDataComp, iCodCodicaoPagam,bProdutoVivo)";
	$sql .= "              VALUES ('". $_POST['dvalor'] ."', '". date('Y-m-d H:i:s') ."', '". $_POST['icodcodicaopagam'] ."', ";
	$sql .= "                      '". $_POST['bprodutovivo'] ."')"; 
	
	echo '<br />';
	$inserir = mysql_query($sql) or die("Erro ao inserir dados".mysql_error());//o erro ta aki
	
	if($inserir){
		echo 'Inserido com sucesso ';
	}else{
		echo 'Erro ao inserir cadastro';
	}
	
	header('Location: frmprincipal.php');
?>   