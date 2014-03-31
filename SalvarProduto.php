<?php
	include_once("conexao.php");

	//se existir o post enviar executa todo o codigo abaixo
	$_POST['sdescricaoproduto'] = trim($_POST['sdescricaoproduto']);
	$_POST['scategoria']        = trim($_POST['scategoria']);
	$_POST['smarca']            = trim($_POST['smarca']);
	$_POST['sUnidadeMedida']    = trim($_POST['sunidademedida']);
	$_POST['bativo']            = trim($_POST['bativo']);

	//"$sql" string para Inserção de Registros na Tabela
	$sql =  "INSERT INTO tblprodutos(sDescricaoProduto, sCategoria, sMarca,";
	$sql .= "                       sUnidadeMedida, bAtivo)";
	$sql .= "              VALUES ('". $_POST['sdescricaoproduto'] ."', '". $_POST['scategoria'] ."', '". $_POST['smarca'] ."', ";
	$sql .= "                      '". $_POST['sUnidadeMedida'] ."', '". $_POST['bativo'] ."')"; 
	
	echo '<br />';
	$inserir = mysql_query($sql) or die("Erro ao inserir dados".mysql_error());//o erro ta aki
	
	if($inserir){
		echo 'Inserido com sucesso ';
	}else{
		echo 'Erro ao inserir cadastro';
	}
	
	header('Location: frmprincipal.php');
?>   