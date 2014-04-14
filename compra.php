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
    <h1>Lancamento de Compra</h1>
  </div>
<br>

<form name="cadastro" action="SalvarCompra.php" method="post">
	<label style="width:170px" for="name" >Valor Compra</label>
    <div class="div_texbox">
    <input required name="dvalor" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
    <label style="width:170px" for="name">Condicao Pagamento</label>
    <div class="div_texbox">
    <input required name="icodcodicaopagam" type="text" class="textbox" id="name" value="">
	</div>
    <div class="clear"></div>
	<label style="width:170px" for="name">Produto Vivo</label>
    <div class="div_texbox">
     Sim  <input type="radio" name="bprodutovivo"  value="1" checked><br>
     Não <input type="radio" name="bprodutovivo" value="0">
	</div>
    <div class="clear"></div>
	<div class="button_div" style="width:462px">
	<input name="salvar" type="submit" value="Salvar" class="buttons"> 
    <input type="reset" onClick="Foco();" value="Cancelar" class="buttons">
	</div>	   
</form>
<div class="clear"></div>
</div>