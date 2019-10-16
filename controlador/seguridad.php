<?php   

   session_start();

   if (!isset($_SESSION['cedula_usua'])) {
   	    header('location: ../index.php');
   } 