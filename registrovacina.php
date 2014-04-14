<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script>
function Foco(){
document.cadastro.snomecliente.focus();	
}
</script>
</head>

<title>lancamento de compra </title>
</head>
<body>
<div style="float:left">
 <div id="top">
    <h1>Lancamento de Vacina</h1>
  </div>
<br>

<form name="cadastro" action="SalvarRegistroVacina.php" method="post">
	<label for="name">Cod Bovino</label>
    <div class="div_texbox">
    <input required name="icodbovino" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
    <label for="name">Cod Vacina</label>
    <div class="div_texbox">
    <input required name="icodvacina" type="text" class="textbox" id="name" value="">
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
<td width="100%">Código Bovino</td>
<td width="100%">Código Vacina</td>
<td width="100%">Data Vacina</td>
</tr>
<?php
	$con=mysqli_connect("localhost","root","","bovinos");
    // Check connection
    if (mysqli_connect_errno())
    {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	$result = mysqli_query($con,"SELECT * FROM tblregistrovacina");
	while($row = mysqli_fetch_array($result))
  	{	
		echo "<tr>";
		echo "<td>";
		echo $row['iCodRegistroVacina'];
		echo "</td>";
		echo "<td>";
		echo $row['iCodBovino'];
		echo "</td>";	
		echo "<td>";
		echo $row['iCodVacina'];
		echo "</td>";
		echo "<td>";
		echo $row['tRegistroVacina'];
		echo "</td>";					
		echo "</tr>";
		
  	}	
?>
</table>