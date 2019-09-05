<?php
//var_dump($_GET)
	echo "Su nombre es ".$_GET["nombre"];
	$archivo=fopen("usuarios.txt","a");
	
	$miobjeto=new stdClass();
	$miobjeto->nombre="Alfredo";
	$miobjeto->apellido="Mercurio";

	

fwrite($archivo,json_encode($miobjeto));
fclose ($archivo);


	var_dump($miobjeto);
		# code...
	


?>





