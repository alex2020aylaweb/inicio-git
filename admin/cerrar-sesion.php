<?php 
session_start();
echo 'MANDAMOS LA SESIÓN AL INFRAMUNDO!';
session_destroy();
header('location:../index.php');


?>