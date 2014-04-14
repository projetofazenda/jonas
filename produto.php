<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script>
function Foco(){
document.cadastro.snomecliente.focus();	
}
</script>
</head>

<title>cadastro de produtos </title>
</head>
<body>
<div style="float:left">
 <div id="top">
    <h1>Cadastros Produtos:</h1>
  </div>
<br>

<form name="cadastro" action="SalvarProduto.php" method="post">
	<label for="name">Descricao Produto:</label>
    <div class="div_texbox">
    <input required name="sdescricaoproduto" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
    <label for="name">Ativo</label>
    <div class="div_texbox">
     Sim  <input type="radio" name="bativo"  value="1" checked><br>
     Não <input type="radio" name="bativo" value="0">
	</div>
    <div class="clear"></div>
	<label for="name">Categoria:</label>
    <div class="div_texbox">
    <input required name="scategoria" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Unidade Medida:</label>
    <div class="div_texbox">
    <input required name="sunidademedida" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Marca:</label>
    <div class="div_texbox">
    <input required name="smarca" type="text" class="textbox" id="name" value="">
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
<td width="100%">Identificação Produto</td>
<td width="100%">Categoria</td>
<td width="100%">Marca</td>
<td width="100%">Unidade Medida</td>
</tr>
<?php
	$con=mysqli_connect("localhost","root","","bovinos");
    // Check connection
    if (mysqli_connect_errno())
    {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	$result = mysqli_query($con,"SELECT * FROM tblprodutos");
	while($row = mysqli_fetch_array($result))
  	{	
		echo "<tr>";
		echo "<td>";
		echo $row['iCodProduto'];
		echo "</td>";
		echo "<td>";
		echo $row['sDescricaoProduto'];
		echo "</td>";	
		echo "<td>";
		echo $row['sCategoria'];
		echo "</td>";
		echo "<td>";
		echo $row['sMarca'];
		echo "</td>";
		echo "<td>";
		echo $row['sUnidadeMedida'];
		echo "</td>";				
		echo "</tr>";
		
  	}	
?>
</table>
</body>
</html>