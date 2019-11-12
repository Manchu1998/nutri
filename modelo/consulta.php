<?php

  require_once ('conection.php');

  $consulta = "SELECT  * FROM usuarios";
  $datos = consultarSQL($consulta);

    while ($row=mysqli_fetch_array($datos)) {
    	echo '<tr><td>'.$row["cedula_usua"].'</td>';
    	echo '<td>'.$row["nombre_usua"].'</td>';
    	echo '<td>'.$row["apellido_usua"].'</td>';
    	echo '<td>'.$row["email_usua"].'</td>';
    	echo '<td>'.$row["carrera_usua"].'</td>';
    	echo '<td>'.$row["usuario_usua"].'</td>';
    	echo '<td>'.$row["password_usua"].'</td>';
    	echo '<td>'.$row["agree"].'</td></tr>';
    }


?>