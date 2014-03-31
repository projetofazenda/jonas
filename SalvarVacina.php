<?php
	include_once("conexao.php");

	//se existir o post enviar executa todo o codigo abaixo
	$_POST['sdescricaovacina'] = trim($_POST['sdescricaovacina']);

	//"$sql" string para Inserção de Registros na Tabela
	$sql =  "INSERT INTO tblvacina(sDescricaoVacina)";
	$sql .= "              VALUES ('". $_POST['sdescricaovacina'] ."')"; 
	
	echo '<br />';
	$inserir = mysql_query($sql) or die("Erro ao inserir dados".mysql_error());//o erro ta aki
	
	if($inserir){
		echo 'Inserido com sucesso ';
	}else{
		echo 'Erro ao inserir cadastro';
	}
	
	header('Location: frmprincipal.php');
?>   