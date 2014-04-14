<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script>
function Foco(){
document.cadastro.snomecliente.focus();	
}
</script>
</head>

<title>cadastro de bovinos </title>
</head>
<body>
<div style="float:left">
 <div id="top">
    <h1>Cadastros Bovinos:</h1>
  </div>
<br>

<form name="cadastro" action="SalvaBovino.php" method="post">
	<label for="name">Identificacao:</label>
    <div class="div_texbox">
    <input required name="sidentificacao" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Peso:</label>
    <div class="div_texbox">
    <input required name="dpeso" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Cod Mae:</label>
    <div class="div_texbox">
    <input name="icodmae" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Cod Pai:</label>
    <div class="div_texbox">
    <input name="icodpai" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Tipo Bovino:</label>
    <div class="div_texbox">
    <input required name="stipobovino" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Data Nascimento:</label>
    <div class="div_texbox">
    <input required name="tnascimento" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Cod Setor:</label>
    <div class="div_texbox">
    <input required name="icodsetor" type="text" class="textbox" id="name" value="">
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
<td width="100%">Identificação</td>
<td width="100%">Peso</td>
<td width="100%">Cod Mae</td>
<td width="100%">Cod Pai</td>
<td width="100%">Tipo Bovino</td>
<td width="100%">Data Nascimento</td>
<td width="100%">Cod Setor</td>
</tr>
<?php
	$con=mysqli_connect("localhost","root","","bovinos");
    // Check connection
    if (mysqli_connect_errno())
    {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	$result = mysqli_query($con,"SELECT * FROM tblbovino");
	while($row = mysqli_fetch_array($result))
  	{	
		echo "<tr>";
		echo "<td>";
		echo $row['iCodBovino'];
		echo "</td>";
		echo "<td>";
		echo $row['sIdentificacao'];
		echo "</td>";	
		echo "<td>";
		echo $row['dPeso'];
		echo "</td>";
		echo "<td>";
		echo $row['iCodMae'];
		echo "</td>";
		echo "<td>";
		echo $row['iCodPai'];
		echo "</td>";
		echo "<td>";
		echo $row['sTipoBovino'];
		echo "</td>";	
		echo "<td>";
		echo $row['tNascimento'];
		echo "</td>";		
		echo "<td>";
		echo $row['iCodSetor'];
		echo "</td>";						
		echo "</tr>";
		
  	}	
?>
</table>

</body>
</html>