<?php
 session_start("Login");
 if($_SESSION["sLogin"] == "") {
	header("Location: Login.php"); 
 }
?>