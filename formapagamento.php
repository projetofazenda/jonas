<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script>
function Foco(){
document.cadastro.snomecliente.focus();	
}
</script>
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

</body>
</html>