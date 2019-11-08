<?php
  require_once ('conection.php');

      $dni      = $_POST['dni'];
      $nombre   = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $email    = $_POST['email'];
      $carrera  = $_POST['carrera'];
      $usuario  = $_POST['usuario'];
      $password = md5($_POST['password']);
      $agree    = $_POST['agree'];

      $usuarios = "INSERT INTO usuarios(cedula_usua, nombre_usua, apellido_usua, email_usua, carrera_usua, usuario_usua, password_usua, agree) VALUES ('$dni','$nombre','$apellido','$email','$carrera','$usuario','$password', '$agree')";


      if (consultarSQL($usuarios)) {
         echo "Datos gurdados";
         header("lication:../index.php")
      } else {
         echo "Error al insertar";
      }

?>







