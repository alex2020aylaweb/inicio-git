<?php 
// debe recuperar las variables o datos del form y los envia a la tabla de usuarios creando un nuevo registro.

//var_dump ($_POST);



if(isset($_POST['nombre'],$_POST['email'],$_POST['password'])){

$nombre= $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
include '../../conexion.php';

$consulta ="INSERT INTO usuarios(id_usuario,nombre,email,`password`) VALUES ('0','$nombre','$email','$password')";

// ejecutamos la consulta con if else para que nos avise en caso de problemas.
if(mysqli_query($conexion,$consulta)){

    mysqli_close($conexion);
header('location:index.php');



} else{

    echo ' Acuerdate de los errores que daban los passwords en el código se corrigen con el acento frances.';
}
} // aqui termina el isset por seguridad


?>