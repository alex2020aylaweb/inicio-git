<?php 
var_dump($_GET['id_usuario']);
if(isset($_GET['id_usuario'])){

$id=$_GET['id_usuario'];
// preparamos la consulta
$consulta= "DELETE FROM usuarios WHERE id_usuario = $id";
//realizamos la conexion
include '../../conexion.php';
// ejecutamos la consulta
if(mysqli_query($conexion,$consulta)){

header('location:index.php');
}else{

    echo 'no consigo borrarla';
}


} echo 'estas intentando borrar un usuario que no existe';
?>