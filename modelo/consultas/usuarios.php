<?php

  require_once ('conection.php');

  $consulta = "SELECT  * FROM usuarios";
  $datos = consultarSQL($consulta);

    while ($row=mysqli_fetch_array($datos)) {
    	echo '<td>'.$row[""].'</td>';
    }


?>