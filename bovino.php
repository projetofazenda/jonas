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

</body>
</html>