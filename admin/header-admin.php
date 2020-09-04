<?php  // esto irá al principio

// vamos a hacer la autenticación con sesiones. Sacando un menu que va a USUARIOS o a POSTS.
//  una sesion es transmitir una variable de una pagina a otra con una clave temporal dentro del directorio XAMPP.
// iniciamos sesion 
session_start();
if(!isset($_SESSION['autenticacion']) && $_SESSION['autenticacion'] == 'si'){
header('location:../../index.php');
}

?>
   


