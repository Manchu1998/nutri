<?php

  require_once ('conection.php');
  require_once ('../modal/datos_personales.php');



  $consulta = "SELECT  * FROM datos_personales";

  //Lamamos la function de la bd.
  $datos = consultarSQL($consulta);

  while ($fila=$datos->fetch_array(MYSQLI_ASSOC)) {
    echo "<tr>
            <td>".$fila['id_persona']."</td>
            <td>".$fila['dni_persona']."</td>
            <td>".$fila['primer_nombre']."</td>
            <td>".$fila['segundo_nombre']."</td>
            <td>".$fila['apellido_paterno']."</td>
            <td>".$fila['apellido_materno']."</td>
            <td>".$fila['edad_persona']."</td>
            <td>".$fila['estado_civil']."</td>
            <td>".$fila['sexo']."</td>
            <td>".$fila['pais_proced']."</td>
            <td>".$fila['ciudad_proced']."</td>
            <td>".$fila['celular_cont']."</td>

            <td><button type='button' data-toggle='modal' data-target='#EditarDatos' class='btn btn-icon btn-round btn-success'><i class='fa fa-check'></i>
                    </button></td>
            <td><button type='button' data-toggle='modal' data-target='#EliminarDatos' class='btn btn-icon btn-round btn-danger'><i class='fa fa-times'></i>
                    </button></td>
          </tr>";
    }
?>

