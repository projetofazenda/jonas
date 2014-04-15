<?php
	include_once("conexao.php");
	include_once("funcoes.php");
	//se existir o post enviar executa todo o codigo abaixo
	$_POST['sformadepagamento'] = trim($_POST['sformadepagamento']);
	$_POST['bavista'] = trim($_POST['bavista']);

    //Verifica se já existe o cadastro
    $sql = "Select * From tblformadepagamento where sFormadePagamento = '" . $_POST['sformadepagamento'] . "'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) > 0) {
	  Alerta("Forma de pagamento já cadastrada");
	}

	//"$sql" string para Inserção de Registros na Tabela
	$sql =  "INSERT INTO tblformadepagamento(sFormadePagamento, bAvista)";
	$sql .= "              VALUES ('". $_POST['sformadepagamento'] ."', '". $_POST['bavista'] ."')"; 

	$inserir = mysql_query($sql) or die("Erro ao inserir dados".mysql_error());//o erro ta aki
	
	if($inserir){
		echo 'Inserido com sucesso ';
	}else{
		echo 'Erro ao inserir cadastro';
	}
	
	header('Location: frmprincipal.php');
?>   