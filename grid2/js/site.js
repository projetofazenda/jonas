// JavaScript Document
function load_grid(){
	new ajax ('seleciona.php', {onLoading: carregando, onComplete: imprime});
	limpa_form();			
}

function enviar(){
	if($("acao").value=="inserir")
		new ajax ('insere.php?nome=' + document.getElementById('nome').value + '&email=' + document.getElementById('email').value + '&fone=' + document.getElementById('fone').value, {onLoading: carregando, onComplete: load_grid});	
	else if($("acao").value=="alterar")
		new ajax ('altera.php?nome=' + document.getElementById('nome').value + '&email=' + document.getElementById('email').value + '&fone=' + document.getElementById('fone').value + "&id=" + array[0], {onLoading: carregando, onComplete: load_grid});					
}

function apagar(id){
	new ajax ('apaga.php?id=' + id, {onLoading: carregando, onComplete: load_grid});	
}

function editar(texto){
    if(navigator.appName=='Microsoft Internet Explorer'){	
		array=texto.split("<TD>");
		texto=array.join("");
		array=texto.split("</TD>");
	}
	else{
		array=texto.split("<td>");
		texto=array.join("");
		array=texto.split("</td>")	
	}		
	$("nome").value=array[1];
	$("email").value=array[2];
	$("fone").value=array[3];
	$("acao").value="alterar";	
	$("botao").value="Alterar";	
}

function valida_form(){
	if($("nome").value==""){
		alert("Preencha o campo Nome")
		return false;
	}		
	else if($("email").value==""){
		alert("Preencha o campo Email")
		return false;
	}
	else if($("fone").value==""){
		alert("Preencha o campo Telefone")
		return false;
	}	
	else	
		enviar();
}

function limpa_form(){
	$("acao").value="inserir";		
	$("botao").value="Incluir";
	$("nome").value="";
	$("email").value="";	
	$("fone").value="";		
}

function carregando(){
	$("msg").style.visibility="visible";
	$("msg").innerHTML="Processando...";
}

function imprime(request){
	$("msg").style.visibility="hidden";
	var xmldoc=request.responseXML;
	var cabecalho = xmldoc.getElementsByTagName('cabecalho')[0];
	if(cabecalho!=null)
	{
		var campo = cabecalho.getElementsByTagName('campo');
		var tabela="<table class='borda'><tr>"

		//cabecalho da tabela
		for(i=0;i<campo.length;i++){
			tabela+="<td class='borda'><b>"+campo[i].firstChild.data+"</b></td>";
		}
		tabela+="<td colspan='2' class='borda'><b>Controles</b></td>"
		tabela+="</tr>"

		//corpo da tabela
		var registros = xmldoc.getElementsByTagName('registro');
		for(i=0;i<registros.length;i++){
			var itens = registros[i].getElementsByTagName('item'); 
			tabela+="<tr id=linha"+i+">"
			for(j=0;j<itens.length;j++){
				if(itens[j].firstChild==null)
					tabela+="<td></td>";
				else					
					tabela+="<td>"+itens[j].firstChild.data+"</td>";				
			}
			tabela+="<td style='cursor: pointer'><img src='imagens/edit.gif' onClick=editar($('linha"+i+"').innerHTML)></td>";
			tabela+="<td style='cursor: pointer'><img src='imagens/delete.gif' onClick=apagar("+itens[0].firstChild.data+")></td>";			
			tabela+="</tr>";
		}
		
		tabela+="</table>"
		$("resultado").innerHTML=tabela;
		tabela=null;
	}
	else
		$("resultado").innerHTML="Nenhum registro encontrado...";	
}