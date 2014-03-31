<title>cadastro de clientes </title>
</head>
<body>
<form name="cadastro" action="SalvarCliente.php" method="post">

Cadastros Clientes:<br>
Nome Cliente: <input required type="text" name="snomecliente" value=""  width="100px" />|Ativo:Sim<input type="radio" name="bativo"  value="1" checked>-Não<input type="radio" name="bativo" value="0"><br>
Tipo Pessoa: <input required type="text" name="stipocliente" value="" width="100px" /><br>
Cpf/Cnpj: <input required type="text" name="scpfcnpj" value="" width="100px" /><br>
Cidade: <input required type="text" name="scidade" value="" width="100px" /><br>
<input type="submit" name="salvar" value="Salvar"  />  <input type="button" value="Cancelar">
<form/>
       
</body>
</html>