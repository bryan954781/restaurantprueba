
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body background="imagenes/res.jpg">
<div class="error">
	<span>Datos de ingreso no validos plop</span>
</div>

<div class="main">
	<form action="validar.php" method="post">
		<input type="text" name="mail"  requerid placeholder="Usuario" />
		<input type="password" name="pass" pattern="[A-Za-z0-9-]{1,15}" requerid placeholder="Contraseña" />
		<input class="btn btn-primary" type="submit" name="botonlg" value="Aceptar" />
       

	</form>

<form  action="datosregistro.php">
	<input  src="" type="submit" name="botonlg" value="Registrarse" />
</form>

	 
</div>

<script src="js"></script>
<script src="js/main.js"></script>

</body>
</html>