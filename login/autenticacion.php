<?php 
session_start(); 
// coger las variables de login
if(isset($_POST['email'],$_POST['password'])){
   $email =  $_POST['email'];
    $password = $_POST['password'];
    include '../conexion.php';
    $consulta = "SELECT * FROM usuarios";
   if( $datos = mysqli_query($conexion,$consulta)){
       // coincidencia se volverá a true si la consulta coincide.
$coincidencia = false;
    while($fila= mysqli_fetch_array($datos)){
        // comparamos fila a fila email y contraseña
        if($fila['email']===$email && $fila['password']===$password  ){
            $_SESSION['autenticacion']='si';
            $coincidencia = true;            
           
        }
    }
        $coincidencia?header('location:../admin'):header('location:../');
   }else{
       echo 'la consulta no ha podido realizarse';
   }
}else{
    header('location: ../index.php');
}






?>