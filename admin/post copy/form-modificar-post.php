
<?php include '../header.php'; ?>
<?php 
if(isset($_GET['id_post'])){
    $id= $_GET['id_post'];
    $consulta = "SELECT * from post WHERE id_post = $id ";
    include "../conexion.php";
    if($datos=  mysqli_query($conexion,$consulta)){
        // recorremos la consulta
         // aquí usaremos los datos
       while($fila= mysqli_fetch_array($datos)) :?>
<form method='post' action="procesar-modificar-post.php">
<div class='form-group'>
<label for="titulo">Titulo</label>
<input value='<?php echo $fila['titulo'] ?>' class="form-control"  type="text" name="titulo" id="titulo">
</div>
<div class="form-group">
<label for="contenido">Contenido</label>
<textarea class="form-control"  name="contenido" id="contenido" cols="30" rows="10">
<?php echo $fila['contenido'] ?>
</textarea>
</div>
<div class="form-group">
<label for="temas">Temas</label>
<input  value='<?php echo $fila['temas'] ?>' class="form-control"  type="text" name="temas" id="temas">
</div>
<button  class= 'btn btn-primary 'type="submit">Modificar Post</button>



</form>


       <?php
         
       endwhile; 
       mysqli_close($conexion);
        

    }else{
        echo 'la consulta no existe';
    }

}


?>


<?php include '../footer.php'; ?>