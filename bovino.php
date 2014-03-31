<title>cadastro de bovinos </title>
</head>
<body>
<form name="cadastro" action="SalvaBovino.php" method="post">

Cadastros Bovinos:<br>
Identificacao: <input required type="text" name="sidentificacao" value="" sy width="100px" /><br>
Peso: <input required type="text" name="dpeso" value="" width="100px" /><br>
CodMae: <input type="text" name="icodmae" value="" width="100px" /><br>
CodPai: <input type="text" name="icodpai" value="" width="100px" /><br>
Tipo Bovino: <input required type="text" name="stipobovino" value="" width="100px" /><br>
Data nascimento: <input required name="tnascimento" type="text" value="" width="100px" /><br>
CodSetor: <input required name= "icodsetor" type="text" value="" width="100px" /><br>
<input type="submit" name="salvar" value="Salvar"  />  <input type="button" value="Cancelar">
 <form/>
       
</body>
</html>