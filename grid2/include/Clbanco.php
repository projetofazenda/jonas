<?php
class banco{
	private $conn;
	private $db;
	private $query;
	private $data;
	
	function __construct($cnn,$base){
		$this->conn=$cnn;
		$this->db=base;	
	}
	
	function seleciona($tabela){
		$this->query="SELECT * FROM $tabela";
		$result=mysql_query($this->query) or die ("Nao foi possivel selecionar na base");
		return $result;
	}
	
	function insere($tabela,$campos,$valores){
		$this->query="INSERT INTO $tabela $campos VALUES $valores";
		mysql_query($this->query) or die ("Nao foi possivel inserir o registro na base");		
	}
	
	function apaga($tabela,$id){
		$this->query="DELETE FROM $tabela WHERE ID=$id";
		mysql_query($this->query) or die ("Nao foi possivel apagar o registro na base");		
	}
	
	function altera($tabela,$alteracao,$id){
		$this->query="UPDATE $tabela SET $alteracao WHERE ID=$id";
		mysql_query($this->query) or die ("Nao foi possivel alterar o registro na base");		
	}	
}
?>