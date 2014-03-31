
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Sistema Fazenda</title>
    <link type="text/css" href="css/menu.css" rel="stylesheet" />
    <script type="text/javascript" src="js/Jquery.js"></script>
<script type='text/javascript'>
function carrega(sPagina){
  $("#divPrincipal").load(sPagina);		
}

function padrao(){
$("#divPrincipal").height = 900;
	
};
</script>
</head>
<body onLoad="padrao();">

<style type="text/css">
* { margin:0;
    padding:0;
}

#menu { top:50px; }
#copyright {
    width:100%;
    font:12px 'Trebuchet MS';
    color:#bbb;
    text-indent:20px;
    text-align:right;
	vertical-align:bottom; 
}
#copyright a { color:#bbb; }
#copyright a:hover { color:#fff; }
</style>

<div id="menu">
    <ul class="menu">
        <li><a href="#" class="parent"><span>Cadastros</span></a>
            <div><ul>
                <li><a href="#" onClick="carrega('bovino.php')"><span>Bovino</span></a></li>
                <li><a href="#" onClick="carrega('cliente.php')"><span>Cliente</span></a></li>
                <li><a href="#" onClick="carrega('produto.php')"><span>Produto</span></a></li>
                <li><a href="#" onClick="carrega('setor.php')"><span>Setor</span></a></li>
                <li><a href="#" onClick="carrega('vacina.php')"><span>Vacina</span></a></li>
                <li><a href="#" onClick="carrega('formapagamento.php')"><span>Forma De Pagamento</span></a></li>
            </ul></div>
        </li>
        
        <li><a href="#" class="parent"><span>Lançamentos</span></a>
            <div><ul>
                <li><a href="#" onClick="carrega('compra.php')"><span>Compra</span></a></li>
                <li><a href="#" onClick="carrega('venda.php')"><span>Venda</span></a></li>     
                <li><a href="#" onClick="carrega('registrovacina.php')"><span>Registro Vacina</span></a></li> 
                <li><a href="#" onClick="carrega('pesagen.php')"><span>Pesagen</span></a></li>     
                </ul>
            </div>
        </li>    
        
        <li><a href="#" class="parent"><span>Relatórios</span></a>
            <div class="columns two">
                <ul class="one">
                    <li><a href="#"><span>Sub Item 1.1</span></a></li>
                    <li><a href="#"><span>Sub Item 1.2</span></a></li>
                    <li><a href="#"><span>Sub Item 1.3</span></a></li>
                    <li><a href="#"><span>Sub Item 1.4</span></a></li>
                    <li><a href="#"><span>Sub Item 1.5</span></a></li>
                    <li><a href="#"><span>Sub Item 1.6</span></a></li>
                    <li><a href="#"><span>Sub Item 1.7</span></a></li>
                </ul>
                <ul class="two">
                    <li><a href="#"><span>Sub Item 2.1</span></a></li>
                    <li><a href="#"><span>Sub Item 2.2</span></a></li>
                    <li><a href="#"><span>Sub Item 2.3</span></a></li>
                    <li><a href="#"><span>Sub Item 2.4</span></a></li>
                    <li><a href="#"><span>Sub Item 2.5</span></a></li>
                    <li><a href="#"><span>Sub Item 2.6</span></a></li>
                </ul>
            </div>
        </li>
        <li><a href="#"><span>Sobre</span></a></li>
        <li class="last"><a href="#"><span>Versão 1.0</span></a></li>
    </ul>
</div>
<div id="divPrincipal" style="margin-top:40px">

</div>
<div id="copyright">Copyright &copy; 2014 <a href="">Sistemas Maninho</a></div>

</body>
</html>