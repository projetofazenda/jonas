<?php
 session_start("login");
 if($_SESSION["sLogin"] == "") {
	header("Location: Login.php"); 
 }
?>