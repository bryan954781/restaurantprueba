<!--
<input name="boton1" id="boton1" type="button" value="Boton 1" onclick="desactivar(this.name,'boton1,boton2,boton3')" />
<input name="boton2" id="boton2" type="button" value="Boton 2" onclick="desactivar(this.name,'boton1,boton2,boton3')"/>
<input name="boton3" id="boton3" type="button" value="Boton 3" onclick="desactivar(this.name,'boton1,boton2,boton3')" />

<script type="text/javascript">
//Esta funcion servira, pone en nombreBotones los nombres de los botones separados por coma como se ve en el ejemplo de arriba
function desactivar(name,nombreBotones){
	var partesBotones = nombreBotones.split(",");
	for(i=0;i<partesBotones.length;i++){
		var boton = document.getElementById(partesBotones[i]);
		if(boton.name == name)boton.disabled = false;
		else boton.disabled = true;
	}
}
</script>





<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Entrada3</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" value="añadir" id="prueba" onclick="numero.resultado.value=this.value">
      </div>
    </div>
  </div>
</div>







<input name="materia" type="radio" value="1" onclick="numero.resultado.value=this.value">Matematicas<br>
<input name="materia" type="radio" value="2" onclick="numero.resultado.value=this.value">Lenguaje<br>
<input name="materia" type="radio" value="3" onclick="numero.resultado.value=this.value">Tecnologia<br>
<input name="materia" type="radio" value="4" onclick="numero.resultado.value=this.value">Otros ...<br>
<input type="button" class="btn btn-primary" value="añadir" id="prueba" onclick="numero.resultado.value=this.value">




<br>
<form name="numero">
<input name="resultado" type="text" size="12" value="0">
</form>
<input  type="radio" value="1" onclick="numero.resultado.value=this.value">Matematicas<br>
<input  type="radio" value="2" onclick="numero.resultado.value=this.value">Lenguaje<br>
<input  type="radio" value="3" onclick="numero.resultado.value=this.value">Tecnologia<br>
<input  type="radio" value="4" onclick="numero.resultado.value=this.value">Otros ...<br>
<input type="button" class="btn btn-primary" value="añadir" id="prueba" onclick="numero.resultado.value=this.value">







<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Formulario sip.</title>
<script type="text/javascript" src="C:\Users\Admin\Desktop\Sistema DMS\text.js">
</script>
<script type="text/javascript">

icremento =0;
function crear(obj) {
	if(icremento<=4 && icremento>=0){
  icremento++;

  field = document.getElementById('field');
 contenedor = document.createElement('div');
  contenedor.id = 'div'+icremento;
  field.appendChild(contenedor);

  boton = document.createElement('input');
  boton.type = 'text';
  boton.name = 'text'+'[ ]';
  contenedor.appendChild(boton);
}else {

}

}
function borrar(obj) {
  field = document.getElementById('field');
  field.removeChild(document.getElementById(obj));
}
</script>
</head>


<form id="formulario" action="save.php" method="post">


  <fieldset>

     <legend>Formulario SIP.</legend>
      <br>
        <label>Codecs:</label><input id="sip-codecs" name="sip-codecs" type="text" placeholder="" class="form-control sip-codecs" onkeypress="return validar(event)"/ requeried>
        </br>
    <div id="field">
      <label>BLF:</label><input type="button" value="Agregar" onclick="crear(this)">
    </div>
         <br>
        <label>N entero:</label><input id="sip-n-entero" name="sip-n-entero" type="text" placeholder="" class="form-control sip-n-entero" onkeypress="return validar(event)"/ requeried>
        </br>
         <br>
        <label>NAT:</label><input id="sip-nat" name="sip-nat" type="text" placeholder="" class="form-control sip-nat" onkeypress="return validar(event)"/ requeried>
        </br>
       <br>
        <label>Miria peer to perr:</label><input id="sip-maria-peer-to-peer" name="sip-maria-peer-to-peer" type="text" placeholder="" class="form-control sip-maria-peer-to-peer" onkeypress="return validar(event)"/ requeried>
        </br>
     <br>
        <label>Perfil de llamada:</label><input id="sip-perfil-llam" name="sip-perfil-llam" type="text" placeholder="Perfil de llamada" class="form-control sip-perfil-llam" onkeypress="return validar(event)"/ requeried>
        </br>
  </fieldset>





<html>
<head>
	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>

<form method="get" action="pedido.php">
	<input type="text" name="nombre">
	<input type="text" name="apellido">
	<input type="submit" value="Enviar">
</form>

</body>
</html>

<html>
<head>
<title>Crear Campo de texto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">

icremento =0;
function crear(obj) {
	icremento++;
	if(icremento<=5){


	field = document.getElementById('field');
 contenedor = document.createElement('div');
	contenedor.id = 'div'+icremento;
	field.appendChild(contenedor);

	boton = document.createElement('input');
	boton.type = 'text';
	boton.name = 'text'+'[ ]';
	contenedor.appendChild(boton);
}else{

}

}
function borrar(obj) {
	field = document.getElementById('field');
	field.removeChild(document.getElementById(obj));
}
</script>
</head>
<body>
<form name="form1" method="POST" action="save.php">

<fieldset id="field">
<input type="button" value="Crear caja de texto" onclick="crear(this)">
<input type="button" value="Borrar caja de texto" onclick="borrar(this)">
<input name="save" type="submit" value="Guardar" onclick="enviar(this)">
</fieldset>
</form>
</body>
</html>
-->

<!--
<html>
<head>
   <title>Cambiar el valor por defecto</title>
   <script>
    function cam1(){
      	document.miFormulario.campo1.defaultValue = "comer"
    }
   </script>
   <script>
    function cam2(){
      	document.miFormulario.campo2.defaultValue = "tomar"
    }
   </script>
   <script>
    function cam3(){
      	document.miFormulario.campo3.defaultValue = "correr"
    }
   </script>
   <script>
    function cam4(){
      	document.miFormulario.campo4.defaultValue = "vivir"
    }
   </script>
</head>

<body>
<form name="miFormulario" action="pedido.php" method="post">
<input type="Text" name="campo1" value="" size="12">
<input type="Text" name="campo2" value="" size="12">
<input type="Text" name="campo3" value="" size="12">
<input type="Text" name="campo4" value="" size="12">

<br>
<br>
<input type="button" value="boton1" onclick="cam1()">
<input type="button" value="boton2" onclick="cam2()">
<input type="button" value="boton3" onclick="cam3()">
<input type="button" value="boton4" onclick="cam4()">
<input type="submit" value="ENVIAR">
</form>
</body>
</html>
-->

<?php

$caracteres = "ASSSSSS";
$caracteres .= "1234567890";
$final = array();
$longitud = 4;
$carac_desordenada = str_shuffle($caracteres);
for($i=0;$i<=$longitud;$i++) {
$final[$i] = $carac_desordenada[$i]; }
//recorremos la array e imprimimos
foreach($final as $datos) {
echo $datos; }

 ?>
