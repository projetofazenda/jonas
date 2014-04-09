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