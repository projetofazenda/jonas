<?php
	include_once("conexao.php");

	//se existir o post enviar executa todo o codigo abaixo
	$_POST['sidentificacao'] = trim($_POST['sidentificacao']);
	$_POST['dpeso']          = trim($_POST['dpeso']);
	$_POST['icodmae']        = trim($_POST['icodmae']);
	$_POST['icodpai']        = trim($_POST['icodpai']);
	$_POST['stipobovino']    = trim($_POST['stipobovino']);
	$_POST['tnascimento']    = trim($_POST['tnascimento']);
	$_POST['icodsetor']      = trim($_POST['icodsetor']);

	//"$sql" string para Inserção de Registros na Tabela
	$sql =  "INSERT INTO tblbovino(sIdentificacao, dPeso, iCodMae,";
	$sql .= "                       iCodPai, sTipoBovino, tNascimento, iCodSetor)";
	$sql .= "              VALUES ('". $_POST['sidentificacao'] ."', '". $_POST['dpeso'] ."', '". $_POST['icodmae'] ."', ";
	$sql .= "                      '". $_POST['icodpai'] ."', '". $_POST['stipobovino'] ."', '". $_POST['tnascimento'] ."', '". $_POST['icodsetor'] ."')"; 
	
	echo '<br />';
	$inserir = mysql_query($sql) or die("Erro ao inserir dados".mysql_error());//o erro ta aki
	
	if($inserir){
		echo 'Inserido com sucesso ';
	}else{
		echo 'Erro ao inserir cadastro';
	}
	
	header('Location: frmprincipal.php');
?>   