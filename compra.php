<head>
<script>
 function abrir(URL) {  
 var width = 150; 
 var height = 250;  
 var left = 99; 
 var top = 99;  
 window.open(URL, 'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no'); 
 } 

</script>

<title>Lancamento de compra </title>
</head>
<body>
<form name="cadastro" action="SalvarCompra.php" method="post">

Lancamento de compra:<br>
Produto: <input required type="text" name="dvalor" value="" width="100px" />
<input type="button" value="Adicionar" onClick="abrir('http://www.google.com');">  <br>
Condicao Pagamento: <input required type="text" name="icodcodicaopagam" style="width:40px" />  
<input required type="text" name="idescodicaopagam" readonly width="200px" /><br>
Produto Vivo:<input type="checkbox" name="bprodutovivo" value=""><br>
<input type="submit" name="salvar" value="Salvar"  />  <input type="button" value="Cancelar">
<form/>
       
</body>
</html>