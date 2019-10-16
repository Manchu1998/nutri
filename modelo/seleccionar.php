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
   	 	         <td>".$fila['agree']."</td>
                  <td><a href='procesos/actualizar.php?id=".$fila['id_usua']."' class='btn btn-secondary' >Editar </a></td>
                  <td><a href='' class='btn btn-info' >Eliminar</a></td>

   	 	       </tr>";
   	 }

   } else {
   	     echo "<tr>
   	 	             

   	 	       </tr>";
    }
   



 ?>