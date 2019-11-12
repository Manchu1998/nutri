<?php

  require_once ('conection.php');


  $consulta = "SELECT  * FROM producto";
  //Lamamos la function de la bd.
  $datos = consultarSQL($consulta);

  while ($fila=$datos->fetch_array(MYSQLI_ASSOC)) {
    echo "<tr>
            <td>".$fila['id_prod']."</td>
            <td>".$fila['codigo_prod']."</td>
            <td>".$fila['nombre_prod']."</td>
            <td>".$fila['descrip_prod']."</td>

            <td><button type='button' data-toggle='modal' data-target='#modal' class='btn btn-icon btn-round btn-success'><i class='fa fa-check'></i>
                    </button></td>
            <td><button type='button' data-toggle='modal' data-target='#modal' class='btn btn-icon btn-round btn-danger'><i class='fa fa-times'></i>
                    </button></td>
          </tr>";
    }
?>

