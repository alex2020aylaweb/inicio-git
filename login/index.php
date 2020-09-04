<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body class="text-center">
    
<?php 
include '../header.php';
?>

// aqui creamos el formulario que verá el usuario/////////////////////////index

<form class="form-signin" method="post" action="autenticacion.php"> <!-- si incluimos novalidate quitamos la seguridad-->
  <img
    class="mb-4"
    src="bootstrap_logo.svg"
    alt=""
    width="72"
    height="72"
  />


  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="email" >Email address</label>
  <input
  name='email'
    type="email"
    id="email"
    class="form-control"
    placeholder="Email address"
    requiered
    autofocus
    name='email';
    
    autofocus /><!-- si añadimos requiered nos saldrá un bocadillo diciendo lo que falta -->


  <label for="password"  class='sr-only'>Password</label>

  <input
  name='password'
    type="password"
    id="password"
    class="form-control"
    placeholder="Password"    
    requiered
    autofocus
    
  /> <!-- si añadimos requiered nos saldrá un bocadillo diciendo lo que falta -->


  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" name='recordarme' value="que si, que si." /> Remember me
    </label>
  </div>


  <button class="btn btn-lg btn-primary btn-block" type="submit">

    Firmar
  </button>

</form>



<?php 
include '../footer.php';
?>
</body>
</html>
