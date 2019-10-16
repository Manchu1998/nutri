<?php  

  require_once ('conection.php');

    //Recibiendo los datos a ingresar a la tabla de la Base de Datos.
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $marca  = $_POST['marca'];

    $insertar_producto = $pdo->prepare("INSERT INTO producto(codigo_prod, nombre_prod, marca_prod) VALUES(?,?,?)");

    $insertar_producto->bindParam(1, $codigo);
    $insertar_producto->bindParam(2, $nombre);
    $insertar_producto->bindParam(3, $marca);
    $insertar_producto->bindParam(Carr-00(1));

    if ($insertar_producto->execute()) {
    	 echo "DATOS INSERTADOS SATISFACTORIAMENTE";
    	 header('location:../vistas/producto.php');
    } else {
    	echo "HA OCURRIDO UN ERROR!!!!";
    }
    
   