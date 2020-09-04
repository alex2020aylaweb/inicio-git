<?php  // esto irá al principio

// vamos a hacer la autenticación con sesiones. Sacando un menu que va a USUARIOS o a POSTS.
//  una sesion es transmitir una variable de una pagina a otra con una clave temporal dentro del directorio XAMPP.
// iniciamos sesion 

/*
session_start();
if(isset($_SESSION['autenticacion']) && $_SESSION['autenticacion'] == 'si'):// 

*/
include 'header-admin.php';
include '../header.php';
?>
    <h1>BIENVENIDO A MI PÁGINA DE ADMINISTRACIÓ</h1>
    <a href="posts"> Ver posts</a>
    <a href="usuarios"> Ver usuarios</a>

<?php 
/*
echo '<a class="btn btn-warning" href=""> Cerrar sesión </a>';

echo session_id();   // Esto irá al final nos muestra un numero aleatorio de inicio de sesion que lo guarda en XAMPP/tmp

echo var_dump ($_SESSION); // mientras no tenga variables no muestra nada.

endif;

echo ' ECHO esto será el index.php protegido';
*/

include 'footer-admin.php';

?>