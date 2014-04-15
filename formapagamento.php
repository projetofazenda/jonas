<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script language="javascript" type="text/javascript" src="js/funcoes.js"></script>
</head>

<title>cadastro de Forma de pagamento </title>
</head>
<body>
<div style="float:left">
 <div id="top">
    <h1>Cadastro Forma Pagamento:</h1>
  </div>
<br>

<form name="cadastro" action="SalvarFormaPagamento.php" method="post">
	<label for="name">Forma Pagamento</label>
    <div class="div_texbox">
    <input required name="sformadepagamento" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
    <label for="name">Avista</label>
    <div class="div_texbox">
     Sim  <input type="radio" name="bavista"  value="1" checked><br>
     Não <input type="radio" name="bavista" value="0">
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
<td width="100%">Forma de Pagamento</td>
</tr>
<?php
	$con=mysqli_connect("localhost","root","","bovinos");
    // Check connection
    if (mysqli_connect_errno())
    {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	$result = mysqli_query($con,"SELECT * FROM tblformadepagamento");
	$i = 1;
	while($row = mysqli_fetch_array($result))
  	{	
		echo "<tr id =\"".$i."\" style=\"background:#FFFFFF\"  onMouseOver=\"mousedentro(this.id)\" onMouseOut=\"mousefora(this.id)\" onClick=\"mudacor(this.id)\">";
		echo "<td>";
		echo $row['iCodFormadepagamento'];
		echo "</td>";
		echo "<td>";
		echo $row['sFormadePagamento'];
		echo "</td>";	
		echo "</tr>";
		$i = $i +1;
  	}	
?>
</table>
</body>
</html>