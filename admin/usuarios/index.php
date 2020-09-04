<?php // este archivo muestra una lista de la tabla de usuarios.

include '../header-admin.php';
include '../../header.php';


if (isset($_GET['exito']) && $_GET='modificacion'){
    // AQUI VA UN SCRIPT DE BOOTSTRAP
  echo 'AQUI VA UN SCRIPT DE BOOTSTRAP y javascript que diga que hemos modificado USUARIOS con éxito y se pueda quitar con una X<br>';
  
  }

// si existe la variable $exito y tiene este valor 'modificacion'... pinta Exito!
if(isset($_GET['exito']) && $_GET['exito']=='modificacion'){

    echo'<div class="alert alert-success" role="alert">
    Has modificado los datos de usuario con éxito!
  </div>';// alerta de bootstrap y podemos ponerle una equis para poder borrarla de la pantalla con javascritp!.

}


echo '<a class="btn btn-success mb-2 mt-2" href="form-agregar-usuario.php">Añadir Usuario</a>';// con class añadimos las caracteristicas de bootstrap


// trayendo de la tabla a la web con PHP y lo muestro con HTML y CSS.
// La llamamos index para que se ejecute automáticamente.

//lo primero conectamos con la base de datos.
//$conexion = mysqli_connect('localhost','root','','blog'); es lo mismo que la línea siguiente:
include '../../conexion.php';//para manejar los errores con un archivo externo que habíamos llamado conexion.php

if(!$conexion): // esta es la sintaxis que se usa actualmente con dos puntos y acabado en end.
    echo 'ojo, no se ha podido establecer la conexión con la BD.';
else:
    echo ' Bien, se ha establecido la conexión con la BD y
     puedes hacer la query o consulta.<hr>';



     // Segundo preparamos la consulta sql.
     $consulta = "SELECT * FROM usuarios";

     // tercero ejecutamos la consulta.
     $datos = mysqli_query($conexion,$consulta);

     if($datos){
// aqui abre la tabla. y metemos la class='table' de bootstrap para verlo bonito.
echo '<table  class="table"> 
<th>id</th>
<th>nombre</th>
<th>email</th>
<th>password</th>';


        // visualizamos los registros completos y fila a fila.
        while ($fila = mysqli_fetch_array($datos)){
// MUESTRA LAS FILAS
            include 'template-tabla-usuarios.php';
            echo '$fila  muestra una fila <br>';
        }
// aqui termina el loop y cierra la tabla.
        echo '</table>';



     }else{
         echo ' ha fallado la consulta! ';
     }

endif;


include '../../footer.php';


echo '<p> Regresar sin guardar sesión al <a href="../../index.php">inicio </a></p>';

?>