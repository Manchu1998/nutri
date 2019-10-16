<?php  
    
     include_once('conection.php');

   if (isset($_POST['dni']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['carrera'])  &&isset($_POST['usuario']) && isset($_POST['password']) && isset($_POST['agree'])) {   	      
   	      
   	      $dni      = $_POST['dni'];
   	      $nombre   = $_POST['nombre'];
   	      $apellido = $_POST['apellido'];
   	      $email    = $_POST['email'];
            $carrera  = $_POST['carrera'];
   	      $usuario  = $_POST['usuario'];
   	      $password = md5($_POST['password']);
            $agree    = $_POST['agree'];

   	      $insertar=$pdo->prepare("INSERT INTO usuarios(cedula_usua,nombre_usua,apellido_usua,email_usua, carrera_usua, usuario_usua, password_usua, agree) VALUES(?,?,?,?,?,?,?,?)");

   	          $insertar->bindParam(1, $dni);
   	          $insertar->bindParam(2, $nombre);
   	          $insertar->bindParam(3, $apellido);
   	          $insertar->bindParam(4, $email);
                $insertar->bindParam(5, $carrera);
   	          $insertar->bindParam(6, $usuario);
   	          $insertar->bindParam(7, $password);
                $insertar->bindParam(8, $agree);

   	          if ($insertar->execute()) {
   	          	    echo "Datos almacenados correctamente";
   	          } else {
   	          	 echo "Error al guardar los datos";
   	           }

   	          $insertar->execute();
   	          header('location:../vistas/inicio.php');
   	          

   } else {
   	 echo "Falta algunos datos por llenar";
   	   header('location:');
   }
   


