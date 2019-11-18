<?php

  require_once ('conection.php');

     //Obteniendo datos personales de Modal.
  $cedula     = $_POST['dni'];
  $nombre1    = $_POST['primer_nombre'];
  $nombre2    = $_POST['segundo_nombre'];
  $apellido1  = $_POST['apellido_paterno'];
  $apellido2  = $_POST['apellido_materno'];
  $edad       = $_POST['edad'];
  $estado_civil = $_POST['estado_civil'];
  $sexo       = $_POST['sexo'];
  $pais       = $_POST['pais'];
  $ciudad     = $_POST['ciudad'];
  $celular    = $_POST['celular'];

  $datos = "INSERT INTO datos_personales(dni_persona, primer_nombre, segundo_nombre, apellido_paterno, apellido_materno, edad_persona, estado_civil, sexo, pais_proced, ciudad_proced, celular_cont) VALUES
  ('$cedula', '$nombre1', '$nombre2', '$apellido1', '$apellido2', '$edad', '$estado_civil', '$sexo', '$pais', '$ciudad', '$celular')";

  if (consultarSQL($datos)) {
       echo "Datos insertados correctamente";
       header('location:../vistas/datos_personales.php');
    }else {
         echo "Error al insertar";
   }

 ?>