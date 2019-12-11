<?php

  require_once ('conection.php');
  require_once ('../modal/producto.php');


  $consulta = "SELECT  * FROM producto";
  //Lamamos la function de la bd.
  $datos = consultarSQL($consulta);

  while ($fila=$datos->fetch_array(MYSQLI_ASSOC)) {
    echo "<tr>
            <td>".$fila['id_prod']."</td>
            <td>".$fila['codigo_prod']."</td>
            <td>".$fila['nombre_prod']."</td>
            <td>".$fila['descrip_prod']."</td>

            <td><a href='actualizaciones/actualizar_egresado.php?id_prod=".$fila['id_prod']."'><button type='button' data-toggle='modal' class='btn btn-icon btn-round btn-danger'><i class='fa fa-times'></i>
              </button></a></td>
            <td><button type='button' data-toggle='modal' data-target='#Eliminarproducto' class='btn btn-icon btn-round btn-danger'><i class='fa fa-times'></i>
              </button></td>
          </tr>";
    }
?>

