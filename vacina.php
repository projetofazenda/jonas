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

</body>
</html>