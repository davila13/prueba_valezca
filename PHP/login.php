<?php 
	$user=$_POST['usuario'];
	$pass=$_POST['clave'];
	
	if($user=="valezca" and $pass=="123456789"){
		header("location: ..\INICIO.html");
	}
?>