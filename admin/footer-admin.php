
<?php  


echo '<a class="btn btn-info" href="cerrar-sesion.php"> Cerrar sesión </a>';

echo session_id();   // Esto irá al final nos muestra un numero aleatorio de inicio de sesion que lo guarda en XAMPP/tmp

echo var_dump ($_SESSION); // mientras no tenga variables no muestra nada.

// endif;

echo ' ECHO esto será el index.php protegido';




?>