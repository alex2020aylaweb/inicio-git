<h2>modificar usuario </h2>

<form action="procesar-modificar-usuario.php"   method='POST' > 


<div class='form-group'>
<label for="id">ID Usuario</label>
<input  class="form-control" value='<?php echo $fila['id_usuario'] ?>'  type="text" name="id_usuario" id="id_usuario" readonly >
</div>


<div class='form-group'>
<label for="nombre">Nombre Usuario</label>
<input  class="form-control" value='<?php echo $fila['nombre'] ?>'  type="text" name="nombre" id="nombre" >
</div>

<div class='form-group'>
<label for="email">Email Usuario</label>
<input class="form-control" value='<?php echo $fila['email'] ?>' type="email" name="email" id="email">
</div>

<div class='form-group'>
<label for="password">Password Usuario</label>
<input class="form-control" value='<?php echo $fila['password'] ?>' type="text" name="password" id="password">
</div>

<button  class= 'btn btn-primary mb-2' type="submit">Modificar Usuario</button>





</form>