<?php
//var_dump($_GET)
	echo "Su nombre es ".$_GET["nombre"];
	$archivo=fopen("usuarios.txt","a");
	fwrite($archivo, $_GET["nombre"]."\n"); 
		# code...
	


?>





