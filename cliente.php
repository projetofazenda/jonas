<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script>
function Foco(){
document.cadastro.snomecliente.focus();	
}
</script>
</head>

<title>cadastro de clientes </title>
</head>
<body>
<div style="float:left">
 <div id="top">
    <h1>Cadastros Clientes:</h1>
  </div>
<br>

<form name="cadastro" action="SalvarCliente.php" method="post">
	<label for="name">Nome cliente</label>
    <div class="div_texbox">
    <input required name="snomecliente" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Ativo</label>
    <div class="div_texbox">
     Sim  <input type="radio" name="bativo"  value="1" checked><br>
     Não <input type="radio" name="bativo" value="0">
	</div>
    <div class="clear"></div>
	<label for="name">Tipo Pessoa:</label>
    <div class="div_texbox">
    <input required name="stipocliente" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Cpf/Cnpj:</label>
    <div class="div_texbox">
    <input required name="scpfcnpj" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Cidade:</label>
    <div class="div_texbox">
    <input required name="scidade" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<div class="button_div">
	<input name="salvar" type="submit" value="Salvar" class="buttons"> 
    <input type="reset" onClick="Foco();" value="Cancelar" class="buttons">
	</div>	   
</form>
<div class="clear"></div>
</div>
<div id="divGrid" style="float:left"></div>
<table border="3"  style="max-height:500px">
<tr bgcolor="#E6E6E6" style="color:#000">
<td width="70px">Código</td>
<td width="100%">Nome</td>
<td width="100%">Tipo Cliente</td>
<td width="100%">Cnpj/Cpf</td>
<td width="100%">Cidade</td>
</tr>
<?php
	$con=mysqli_connect("localhost","root","","bovinos");
    // Check connection
    if (mysqli_connect_errno())
    {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	$result = mysqli_query($con,"SELECT * FROM tblcliente");
	while($row = mysqli_fetch_array($result))
  	{	
		echo "<tr>";
		echo "<td>";
		echo $row['iCodCliente'];
		echo "</td>";
		echo "<td>";
		echo $row['sNomeCliente'];
		echo "</td>";	
		echo "<td>";
		echo $row['sTipoCliente'];
		echo "</td>";
		echo "<td>";
		echo $row['sCpfCnpj'];
		echo "</td>";
		echo "<td>";
		echo $row['sCidade'];
		echo "</td>";							
		echo "</tr>";
		
  	}	
?>
</table>
</body>
</html>