<title>Lancamento de compra </title>
</head>
<body>
<form name="cadastro" action="SalvarCompra.php" method="post">

Lancamento de compra:<br>
Produto: <input required type="text" name="dvalor" value="" sy width="100px" />
<input type="button" value="Adicionar">  <br>
Condicao Pagamento: <input required type="text" name="icodcodicaopagam" style="width:40px" />  
<input required type="text" name="idescodicaopagam" readonly width="200px" /><br>
Produto Vivo:<input type="checkbox" name="bprodutovivo" value=""><br>
<input type="submit" name="salvar" value="Salvar"  />  <input type="button" value="Cancelar">
<form/>
       
</body>
</html>