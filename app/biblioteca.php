<?php

function sentencia_sql($taula){
	$sql = "select * from ".$taula;
	return($sql);
}

function consulta($sql,$host,$bd,$user,$passwd){
	try {
		$connexio = new PDO("mysql:host=$host;dbname=$bd",$user,$passwd);
		$connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$connexio->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 	
		$consulta = $connexio->prepare($sql);
		$consulta->execute();
		$resultat = $consulta->fetchAll();
		$consulta=null;
		$bd=null;
    } catch (PDOException $e) {
		print "Error!!! ".$e->getMessage()."<br>";
		$consuta=null;
		$bd=null;		
		die();
	}
    return $resultat;
}

function mostra($dades){
	foreach ($dades as $usuari) {
		foreach ($usuari as $clau => $dada) {
			echo $clau." : ".$dada."<br>";
		}
		echo "<br>";
	}	
	return 0;
}

?>
