<?php 
//recoger los datos que nos envia el formularioa
if(isset($_POST['id_post'],$_POST['titulo'],$_POST['contenido'],$_POST['temas'])){

    $id=$_POST['id_post'];
    $titulo=$_POST['titulo'];
    $contenido=$_POST['contenido'];
    $temas= $_POST['temas'];

include '../../conexion.php'; // conectamos con la base de datos
// consultamos la base de datos

$consulta="UPDATE post SET  titulo='$titulo', contenido = '$contenido', temas='$temas' WHERE id_post= $id";
// le mandamos al index de posts para comprobar cambios.
// update modifica 
if(mysqli_query($conexion,$consulta)){
    header('location:index.php?exito=modificacion');
    
}else{
    //header('location:index.php?error=modificacion');
echo ' ha habido un error al modificar los datos del post';
}

}




?>