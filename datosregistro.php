<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
  
	
	<title>Formulario registro </title>
</head>
<body>

<form method="post" action="" >
  <div class="datosr">
    <legend  style="font-size: 18pt;"><b> Formulario Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Nombre" />
    </div>
    <div class="form-group">
      <p style="font-size: 14pt;"><b>Ingresa tu email</b></p>
      <input type="text" name="nick" class="form-control"  required placeholder="E-mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="Repite Contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
     

</form>

<form action="index.php ?>">
  <input  type="submit"  value="Iniciar Sesion"/>

</form>



</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->




</body>
</html>