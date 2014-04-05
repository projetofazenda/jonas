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

</body>
</html>