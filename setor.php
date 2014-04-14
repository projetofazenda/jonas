<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script>
function Foco(){
document.cadastro.snomecliente.focus();	
}
</script>
</head>

<title>cadastro de setor </title>
</head>
<body>
<div style="float:left">
 <div id="top">
    <h1>Cadastros Setor:</h1>
  </div>
<br>

<form name="cadastro" action="SalvarSetor.php" method="post">
	<label for="name">Nome Setor:</label>
    <div class="div_texbox">
    <input required name="snomesetor" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Capacidade:</label>
    <div class="div_texbox">
    <input  required name="icapacidade" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
    <label for="name">Setor Ativo</label>
    <div class="div_texbox">
     Sim  <input type="radio" name="bativo"  value="1" checked><br>
     Não <input type="radio" name="bativo" value="0">
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
<td width="100%">Nome Setor</td>
<td width="100%">Capacidade</td>
</tr>
<?php
	$con=mysqli_connect("localhost","root","","bovinos");
    // Check connection
    if (mysqli_connect_errno())
    {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	$result = mysqli_query($con,"SELECT * FROM tblsetor");
	while($row = mysqli_fetch_array($result))
  	{	
		echo "<tr>";
		echo "<td>";
		echo $row['iCodSetor'];
		echo "</td>";
		echo "<td>";
		echo $row['sNomeSetor'];
		echo "</td>";	
		echo "<td>";
		echo $row['iCapacidade'];
		echo "</td>";					
		echo "</tr>";
		
  	}	
?>
</table>

</body>
</html>

