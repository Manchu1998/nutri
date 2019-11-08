<?php

 //Realizando la conexion a la base de Datos.

   function consultarSQL($query){
	     $mysqli = new mysqli("localhost", "root", "@ignacio1998", "nutri");
	     if (mysqli_connect_errno()) {
	        echo "El sistema tiene errore al conectarse";
	     }

	     $mysqli->set_charset("uft8");
	     $mysqli->autocommit(FALSE);
	     $mysqli->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);

	     if ($consulta=$mysqli->query($query)) {
	     	if ($mysqli->commit()) {
	     		//echo "Datos guardados";
	     	}else {
	     		echo "Datos no guardados";
	     	}

	     }else {
	     	$mysqli->rollback();
	     	//echo "Error al guardar los datos";
	     }

	     return $consulta;
   }

?>