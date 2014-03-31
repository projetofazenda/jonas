<?php
	include_once("conexao.php");

	//se existir o post enviar executa todo o codigo abaixo
	$_POST['snomesetor'] = trim($_POST['snomesetor']);
	$_POST['icapacidade']        = trim($_POST['icapacidade']);
	$_POST['bativo']            = trim($_POST['bativo']);

	//"$sql" string para Inserção de Registros na Tabela
	$sql =  "INSERT INTO tblsetor(sNomeSetor,iCapacidade, bAtivo)";
	$sql .= "              VALUES ('". $_POST['snomesetor'] ."', '". $_POST['icapacidade'] ."', '". $_POST['bativo'] ."')"; 
	
	echo '<br />';
	$inserir = mysql_query($sql) or die("Erro ao inserir dados".mysql_error());//o erro ta aki
	
	if($inserir){
		echo 'Inserido com sucesso ';
	}else{
		echo 'Erro ao inserir cadastro';
	}
	
	header('Location: frmprincipal.php');
?>   