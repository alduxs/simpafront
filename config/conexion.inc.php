<?php // Fichero con los datos de conexion a la BBDD
function Conectarse()
{

	$host = $_SERVER["HTTP_HOST"];
	if ($host == "localhost") {
		$db_host = "localhost"; // Host al que conectar, habitualmente es el 'localhost'
		$db_nombre = "c2641731_prop"; // Nombre de la Base de Datos que se desea utilizar
		$db_user = "c2641731_prop"; // Nombre del usuario con permisos para acceder
		$db_pass = "geweduZO76"; // Contraseña de dicho usuarioario
	} else if ($host == "192.168.100.16") {
		$db_host = "localhost"; // Host al que conectar, habitualmente es el 'localhost'
		$db_nombre = "c2641731_prop"; // Nombre de la Base de Datos que se desea utilizar
		$db_user = "c2641731_prop"; // Nombre del usuario con permisos para acceder
		$db_pass = "geweduZO76"; // Contraseña de dicho usuario
	} else {
		$db_host = "localhost"; // Host al que conectar, habitualmente es el 'localhost'
		$db_nombre = "estancia_cotizador"; // Nombre de la Base de Datos que se desea utilizar
		$db_user = "cotizador"; // Nombre del usuario con permisos para acceder
		$db_pass = "7@b1Ln65v"; // Contraseña de dicho usuario
	}

	try {
		$link = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_nombre, $db_user, $db_pass);
		return $link;
	} catch (PDOException $e) {
		print "Error: " . $e->getMessage() . "<br/>";
		die();
	}
}
