<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script>
function Foco(){
document.cadastro.snomecliente.focus();	
}
</script>
</head>

<title>cadastro de vacina </title>
</head>
<body>
<div style="float:left">
 <div id="top">
    <h1>Cadastro Vacina:</h1>
  </div>
<br>

<form name="cadastro" action="SalvarVacina.php" method="post">
	<label for="name">Descricao Vacina:</label>
    <div class="div_texbox">
    <input required name="sdescricaovacina" type="text" class="textbox" id="name" value="">
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
<td width="100%">Descrição Vacina</td>
</tr>
<?php
	$con=mysqli_connect("localhost","root","","bovinos");
    // Check connection
    if (mysqli_connect_errno())
    {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	$result = mysqli_query($con,"SELECT * FROM tblvacina");
	while($row = mysqli_fetch_array($result))
  	{	
		echo "<tr>";
		echo "<td>";
		echo $row['iCodVacina'];
		echo "</td>";
		echo "<td>";
		echo $row['sDescricaoVacina'];
		echo "</td>";						
		echo "</tr>";
		
  	}	
?>
</table>
</body>
</html>