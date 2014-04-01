<?php
	include_once("conexao.php");

	//se existir o post enviar executa todo o codigo abaixo
	$_POST['snomecliente']   = trim($_POST['snomecliente']);
	$_POST['stipocliente']   = trim($_POST['stipocliente']);
	$_POST['scpfcnpj']       = trim($_POST['scpfcnpj']);
	$_POST['scidade']        = trim($_POST['scidade']);
	
	//"$sql" string para Inserção de Registros na Tabela
	$sql =  "INSERT INTO tblcliente(sNomeCliente, sTipoCliente, sCpfCnpj,";
	$sql .= "                       sCidade, bAtivo)";
	$sql .= "              VALUES ('". $_POST['snomecliente'] ."', '". $_POST['stipocliente'] ."', '". $_POST['scpfcnpj'] ."', ";
	$sql .= "                      '". $_POST['scidade'] ."', '". $_POST['bativo'] ."')"; 
	
	echo '<br />';
	$inserir = mysql_query($sql) or die("Erro ao inserir dados".mysql_error());//o erro ta aki
	
	if($inserir){
		echo 'Inserido com sucesso ';
	}else{
		echo 'Erro ao inserir cadastro';
	}
	echo "<script>alert('Cadastrado com sucesso!');</script>";
	header('Location: frmprincipal.php');
?>   