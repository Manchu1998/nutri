<?php

  require_once ('conection.php');


      //Insertando producto.
      $codigo    = $_POST['codigo_producto'];
      $nombre      = $_POST['nombre_producto'];
      $descripcion = $_POST['descripcion'];

      $productos = "INSERT INTO producto(codigo_prod, nombre_prod, descrip_prod) VALUES ('$codigo', '$nombre', '$descripcion')";

      if (consultarSQL($productos)) {
         echo "Datos gurdados";
         header("location:../vistas/producto.php");
      } else {
         echo "Error al insertar";
      }
      header('location:../vistas/producto.php');
 ?>