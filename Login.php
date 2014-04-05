<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<?php
session_start("login");
if($_POST['slogin'] <> ''){
	$Resultado = "Login não efetuado!";
	$con=mysql_connect("localhost","root","");
	mysql_select_db('bovinos');
    // Check connection
    if (mysqli_connect_errno())
    {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	$result = mysql_query("SELECT * FROM tblusuario WHERE slogin = '" . $_POST['slogin'] . "' AND ssenha = '" . $_POST['ssenha'] . "'", $con);
	$linhas_afetadas = mysql_affected_rows( );
    if($linhas_afetadas > 0 )
  	{	
	 $_SESSION['slogin'] = 	$row['slogin'];
	 $_SESSION['ssenha'] = 	$row['ssenha'];	
	 header("Location: frmPrincipal.php");
	}
}
?>
<body >
<div style="float:left">
 <div id="top">
    <h1>Efetuar login:</h1>
</div>
<br>

<form name="cadastro" action="" method="post">
	<label for="name">Login</label>
    <div class="div_texbox">
    <input name="slogin" type="text" required  class="textbox" id="login" value="">
	</div>
    <div class="clear"></div>
	<label for="name">Senha</label>
    <div class="div_texbox">
    <input name="ssenha" type="password" class="textbox" id="senha" value="">
	</div>
    <div class="clear"></div>
	<div class="button_div">
	<input name="Entrar" type="submit" value="Entrar" class="buttons"> 
	</div>
    <div class="clear"></div>
    <?php echo $Resultado; ?>
</form>
</body>
</html>