<!DOCTYPE htm>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title>APLICACIÓ DE GESTIÓ D'USUARIS</title>
		<link rel="stylesheet" href="app.css">	
	</head>
	<body>
	<p>LLISTA D'USUARIS</p>
	<ul>
		<?php
			require 'config.php';
			require 'biblioteca.php';						
			$sql = sentencia_sql($taula);
			$resultat=consulta($sql,$host,$bd,$user,$passwd);
			if(mostra($resultat)!=0) echo "Error de consulta<br>";
		?>
	</ul>
	<a href="index.html">Torna a l'inici</a>
	</body>
</html>


	
