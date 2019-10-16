<?php

  $conexion = 'mysql:host=localhost; dbname=nutri';
  $user     = 'root';
  $password =  '@ignacio1998';

  try {

  	 $pdo = new PDO($conexion, $user, $password);
  	  //echo 'Conectado';

  } catch (PDOException $e) {
  	echo "Error al conectar". $e->getMessage() . "<br>";

  }




