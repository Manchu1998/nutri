<?php
  require_once('conection.php');

   $consulta = $pdo->prepare("SELECT * FROM usuarios");
   $consulta->execute();

   if ($consulta->rowCount()>=1) {
   	 while ($fila = $consulta->fetch()) {
   	 	  echo "<tr>
                  <td>".$fila['id_usua']."</td>
   	 	            <td>".$fila['cedula_usua']."</td>
   	 	            <td>".$fila['nombre_usua']."</td>
   	 	            <td>".$fila['apellido_usua']."</td>
   	 	            <td>".$fila['email_usua']."</td>
   	 	            <td>".$fila['usuario_usua']."</td>
                  <td>".$fila['password_usua']."</td>
   	 	            <td>".$fila['agree']."</td>
                  <td><button type='button' data-toggle='tooltip' title='' class='btn btn-link btn-primary btn-lg' data-original-title='Editar'><i class='fa fa-edit'></i></button></td>
                  <td><button type='button' data-toggle='tooltip' title='' class='btn btn-link btn-danger' data-original-title='Eliminar'><i class='fa fa-times'></i></button></td>

                </tr>";
   	    }

   } else {
   	     echo "<tr>


   	 	       </tr>";
    }




 ?>