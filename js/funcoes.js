function mudacor(id){
	var cor = document.getElementById(id).style.background;
	if(cor = '#FFFFFF')
		cor = '#7FFFD4';
	else
		cor = '#FFFFFF';
	document.getElementById(id).style.background = cor; 
}

function mousedentro(id){
	  document.getElementById(id).style.background = '#FFFF00'; 
}
function mousefora(id){
	  document.getElementById(id).style.background = '#FFFFFF'; 
}

function Foco(){
document.cadastro.snomecliente.focus();	
}