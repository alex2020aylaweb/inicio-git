  
<!-- USAMOS ESTA VARIABLE  $FILA QUE HEMOS CREADO PARA ACCEDER A LA TABLA ($fila = mysqli_fetch_array($datos)) 
 Y LA VARIABLE $datos = mysqli_query($conexion,$consulta);
-->

<tr>
<td><?php echo $fila['id_usuario']?></td>
<td><?php echo $fila['nombre']?></td>
<td><?php echo $fila['email']?></td>
<td><?php echo $fila['password']?></td>
<td><a class=' btn btn-warning' href="form-modificar-usuario.php?id_usuario=<?php echo $fila['id_usuario']?>">Modificar</a></td>
<td><a class=' btn btn-danger' href="procesar-borrar-usuario.php?id_usuario=<?php echo $fila['id_usuario']?>">Borrar</a></td>
</tr>


     








    
    