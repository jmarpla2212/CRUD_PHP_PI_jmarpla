<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> 
</head>
<body>
<form action="validate.php" method="POST">
  <div class="imgcontainer">
    <img src="images/user.png" alt="User" class="user" width="200" height="200">
  </div>

  <div class="container">
    <label><b>Usuario</b></label>
    <input type="text" placeholder="Ingresar Usuario" name="username" required>

    <label><b>Contraseña</b></label>
    <input type="password" placeholder="Ingresar Contraseña" name="password" required>
        
    <button type="submit" name="submit">Acceder</button>
    <input type="checkbox" checked="checked"> Recordarme

    <div align="mensaje">
        <?php if(isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                <center><h3>Inicio de sesión incorrecto.</h3></center>
        <?php endif; ?>
    </div>
  
  </div>
</form>

</body>
</html>
