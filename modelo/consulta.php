<?php

  require_once ('conection.php');
  require_once ('../procesos/consulta_usuario.php');


  $consulta = "SELECT  * FROM usuarios";
  //Lamamos la function de la bd.
  $datos = consultarSQL($consulta);

  while ($fila=$datos->fetch_array(MYSQLI_ASSOC)) {
    echo "<tr>
            <td>".$fila['id_usua']."</td>
            <td>".$fila['nombre_usua']."</td>
            <td>".$fila['apellido_usua']."</td>
            <td>".$fila['email_usua']."</td>
            <td>".$fila['carrera_usua']."</td>
            <td>".$fila['usuario_usua']."</td>
            <td>".$fila['agree']."</td>
            <td><button type='button' data-toggle='modal' data-target='#modal' class='btn btn-icon btn-round btn-success'><i class='fa fa-check'></i>
                    </button></td>
          </tr>";
    }
?>

