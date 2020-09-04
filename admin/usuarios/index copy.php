<?php // este archivo administra la tabla de usuarios.

// la responsabilidad de la carpeta admin es administrar la aplicacion.

// este archivo index sirve para listar los post.
include '../../header.php';
include '../../conexion.php';
//include '/header.php'; esto sería para ir al directorio raiz.

// verificamos la conexión
if(!$conexion){
    // si falla la conexión
    echo 'No has podido conectarte, revisa los datos de accesso';
}else{
    // si la conexión no falla
    //echo 'Tienes una conexión excelente';
   // 2. preparamos la consulta y realizamoos la consulta
    $consulta=" SELECT * FROM usuarios ";
    
    if($datos=  mysqli_query($conexion,$consulta)){
       // recorremos la consulta
        // aquí usaremos los datos
        // boton añadir post
        echo "<a class='btn btn-success' href='form-agregar-post.php'>Nuevo Post</a>";
// empieza la tabla

echo "<table class='table'>
<thead>
  <tr>
    <th scope='col'>ID</th>
    <th scope='col'>Nombre</th>
    <th scope='col'>Email</th>
    <th scope='col'>Password</th>
    <th scope='col'>Editar</th>
    <th scope='col'>Borrar</th>
  </tr>
</thead>
<tbody>";
      while($fila= mysqli_fetch_array($datos)) {
        include 'template-tabla-usuarios.php';
      }
// cierro la tabla
echo "  
</tbody>
</table>";
      mysqli_close($conexion);
      
    }else{
        echo 'no se ha podido realizar la consulta';
    }
   
 

}
include '../../footer.php';


?>