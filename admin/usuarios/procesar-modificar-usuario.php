<?php 
//recoger los datos que nos envia el formularioa
if(isset($_POST['id_usuario'],$_POST['email'],$_POST['password'])){

    $id=$_POST['id_usuario'];
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $password= $_POST['password'];

include '../../conexion.php'; // conectamos con la base de datos
// consultamos la base de datos

$consulta="UPDATE usuarios 
SET  id_usuario='$id', nombre = '$nombre', email='$email', `password`='$password' WHERE id_usuario= $id";
// le mandamos al index de usuarios para comprobar cambios.
// update modifica 
if(mysqli_query($conexion,$consulta)){
    header('location:index.php?exito=modificacion');
}else{
    //header('location:index.php?error=modificacion');
echo ' ha habido un error al modificar los datos';
}

}





















?>