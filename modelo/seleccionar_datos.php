<?php
  require_once('conection.php');

   $consulta = $pdo->prepare("SELECT * FROM datos_personales");
   $consulta->execute();

   if ($consulta->rowCount()>=1) {
   	 while ($fila = $consulta->fetch()) {
   	 	  echo "<tr>
                  <td>".$fila['dni_persona']."</td>
   	 	         <td>".$fila['primer_nombre']."</td>
   	 	         <td>".$fila['segundo_nombre']."</td>
   	 	         <td>".$fila['apellido_paterno']."</td>
   	 	         <td>".$fila['apellido_materno']."</td>
   	 	         <td>".$fila['edad_persona']."</td>
   	 	         <td>".$fila['estado_civil']."</td>
                  <td>".$fila['sexo']."</td>
                  <td>".$fila['pais_proced']."</td>
                  <td>".$fila['provincia_proced']."</td>
                  <td>".$fila['ciudad_proced']."</td>
                  <td>".$fila['jubilado_proced']."</td>
                  <td>".$fila['direccion_cont']."</td>
                  <td>".$fila['email_cont']."</td>
                  <td>".$fila['telefono_cont']."</td>
                  <td>".$fila['celular_cont']."</td>
                  <td><button type='button' data-toggle='tooltip' title='' class='btn btn-link btn-primary btn-lg' data-original-title='Editar'><i class='fa fa-edit'></i></button></td>

                  <td><button type='button' data-toggle='tooltip' title='' class='btn btn-link btn-danger' data-original-title='Eliminar'><i class='fa fa-times'></i></button></td>

                  </tr>";
   	 }

   } else {

   }




 ?>