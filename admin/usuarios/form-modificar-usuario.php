<?php 
include '../../header.php';

if(isset($_GET['id_usuario'])){
    $id= $_GET['id_usuario'];

// preparamos la consulta
$consulta= "SELECT * FROM usuarios WHERE id_usuario= $id";

// incluimos la conexion a la base de datos
include '../../conexion.php';
// ejecutamos la consulta con un IF

if($datos= mysqli_query($conexion,$consulta)){
// mostramos los datos
}else{

    echo 'la consulta no se ha realizado';
}
while ($fila=mysqli_fetch_array($datos)){
    // mostrar el html con los datos obtenidos.
    include 'template-form-modificar-usuario.php';
}

}else{
    header('no se ha indicado cual registro, fila o row desea modificar');
}









include '../../footer.php';


?>