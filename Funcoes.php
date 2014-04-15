<?php








function Alerta($sDescricao) {
      	  
	  echo "<script>alert('".$sDescricao."')</script>";
	  echo "<script>location.href='frmPrincipal.php'</script>";
	 //header('Location: frmprincipal.php');	
	 exit;
}













?>