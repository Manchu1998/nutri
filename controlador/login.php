<?php 
  include_once('seguridad.php');

 if (isset($_POST['usuario']) && isset($_POST['password'])) {
 	include_once('../modelo/conection.php');
 	   

 	   $usuario = $_POST['usuario'];
 	   $password =md5($_POST['password']);

 	   $consulta = $pdo->prepare("SELECT * FROM usuarios WHERE usuario_usua = :usuario AND password_usua = :password");

 	   $consulta->bindParam(':usuario', $usuario);
 	   $consulta->bindParam(':password', $password);
 	   $consulta->execute();

 	      if ($consulta->rowCount()>=1) {

 	      	session_start();

 	      	$fila = $consulta->fetch();              
              $_SESSION['cedula_usua'] = $fila['cedula_usua'];
 	      	  $_SESSION['nombre_usua'] = $fila['nombre_usua'];
 	      	  $_SESSION['apellido_usua'] = $fila['apellido_usua'];
 	      	  $_SESSION['email_usua'] = $fila['email_usua'];	      	 
 	      	  

 	      	  header('location:../vistas/inicio.php');

 	      } else {

 	      	echo "Los Datos no son correctos";
 	      	header('location:../index.php');
 	      }
 	      
 } else {
 	# code...
 }
 


 ?>