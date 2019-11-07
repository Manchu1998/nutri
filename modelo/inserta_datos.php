<?php

require_once('conection.php');

//Almacenando los datos enviados desde el formulario.
$cedula    = $_POST['dni'];
$nombre    = $_POST['nombre'];
$nombre1   = $_POST['nombre1'];
$apellido  = $_POST['apell
ido'];
$apellido1 = $_POST['apellido1'];
$edad      = $_POST['edad'];
$estado    = $_POST['estado_civil'];
$sexo      = $_POST['sexo'];
$pais      = $_POST['pais'];
$provincia = $_POST['provincia'];
$ciudad    = $_POST['ciudad'];
$ocupacion = $_POST['ocupacion'];
$direccion = $_POST['direccion'];
$email     = $_POST['email'];
$telefono  = $_POST['telefono'];
$celular   = $_POST['celular'];

//Preparando para insertar a la tabla de la Base de Datos.
$insertar_datos  = $pdo->prepare("INSERT INTO datos_personales(dni_persona, primer_nombre, segundo_nombre, apellido_paterno, apellido_materno, edad_persona, estado_civil, sexo, pais_proced, provincia_proced, ciudad_proced, jubilado_proced, direccion_cont, email_cont, telefono_cont, celular_cont) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");


	$insertar_datos->bindParam(1, $cedula);
	$insertar_datos->bindParam(2, $nombre);
	$insertar_datos->bindParam(3, $nombre1);
	$insertar_datos->bindParam(4, $apellido);
	$insertar_datos->bindParam(5, $apellido1);
	$insertar_datos->bindParam(6, $edad);
	$insertar_datos->bindParam(7, $estado);
	$insertar_datos->bindParam(8, $sexo);
	$insertar_datos->bindParam(9, $pais);
	$insertar_datos->bindParam(10, $provincia);
	$insertar_datos->bindParam(11, $ciudad);
	$insertar_datos->bindParam(12, $ocupacion);
	$insertar_datos->bindParam(13, $direccion);
	$insertar_datos->bindParam(14, $email);
	$insertar_datos->bindParam(15, $telefono);
	$insertar_datos->bindParam(16, $celular);

     if ($insertar_datos->execute()) {
     	header('location:../vistas/datos_personales.php');
     }else {
        echo "Ha ocurrido error al guardar los datos";
     }
