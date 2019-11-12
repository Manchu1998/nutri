<?php
  include_once('seguridad.php');
  require_once('../modelo/conection.php');


 	   $usuario = $_POST['usuario'];
 	   $password =md5($_POST['password']);

 	   $login = "SELECT * FROM usuarios WHERE usuario_usua = '$usuario' AND password_usua = '$password'";

 	   $consulta = consultarSQL($login);
        if ($consulta->num_rows>=1) {

 	      	  session_start();
 	      	  $fila = $consulta->fetch_array(MYSQLI_ASSOC);
              $_SESSION['cedula_usua'] = $fila['cedula_usua'];
 	      	  $_SESSION['nombre_usua'] = $fila['nombre_usua'];
 	      	  $_SESSION['apellido_usua'] = $fila['apellido_usua'];
 	      	  $_SESSION['email_usua'] = $fila['email_usua'];


        	  header('location:../vistas/inicio.php');

        }else {
        	header('location:../index.php');
        }







 ?>