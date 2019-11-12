<?php

  require_once ('conection.php');


      //Insertando producto.
      $producto    = $_POST['nombre_producto'];
      $marca       = $_POST['marca_producto'];
      $descripcion = $_POST['descripcion'];

      $productos = "INSERT INTO producto(codigo_prod, nombre_prod, marca_prod) VALUES ('$producto', '$marca', '$descripcion')";

      //Intentando.
     $resut= consultarSQL($productos);


 $id = mysqli_insert_id($resut);

      $codigo = $id.date('is');

      $productos = "UPDATE  producto set  codigo_barra = '$codigo' WHERE id_prod = '$id'";

      consultarSQL($productos);

      header('location:../vistas/producto.php');
 ?>