<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/creatuplato.css">
<script src="js/bootstrap.min.js"></script>
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

<title>Practica 3</title>
</head>
<body>

<header class="container-fluid fondito">
<div class="container">
<h1> Arma tú plato</h1>
</div>
</header>


<div class="container">
	<!-- Contenido1-->
<!--Carrousel-->
<div class="row">
<div class="visible-lg visible-md col-md-9">
<div id="contenedor">

        <div id="myCarousel" class="carousel slide visible-md visible-lg ">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item"><img  src="imagenes/ban6.jpg" alt="banner1"/></div>
            <div class="item"><img  src="imagenes/upnlogo1.jpg" alt="banner2" /></div>
            <div class="item"><img  src="imagenes/ban5.jpeg" alt="banner3" /></div>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script>
      $(document).ready(function(){
        $('.myCarousel').carousel({
            interval: 1000
        });
    });
    </script>

</div>

<!-- Final Carrousel-->

<aside class="visible-md visible-lg col-xs-12 col-sm-4 col-md-3 fondoaside">

<img src="imagenes/chef1.jpg" class="img-responsive">
</aside>



<div class="col-xs-12 visible-xs visible-sm">
<img src="imagenes/ban6.jpg" class="img-responsive img-rounded">
</div>




</div>

	<!-- Final Contenido1-->


<a class="btn btn-warning" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Información
</a>
<div class="collaps" id="collapseExample">
  <div class="well">
   Arma tu plato desde S/10.00 combinando los siguientes productos.
  </div>
</div>

<div class="container-fluid">
  <div class="col-md-12 col-sm-12">
 <div class="jumbotron">
    <h2>PLATO INGRESADO CORRECTAMENTE</h2>
    <h2>  USTED ESCOGIO LOS SIGUIENTES INGREDIENTES:</h2>
</div>
</div>
</div>


<?php
$salto="<br>";

$camp1 = $_POST["campo1"];
$camp2 = $_POST["campo2"];
$camp3 = $_POST["campo3"];
$camp4 = $_POST["campo4"];

/*require_once('procesos/ConectarBD.php');
$mysql = new Conexion();
$connection = $mysql->get_connection();
*/
 $conexion=mysqli_connect('mysql.webcindario.com','restaurantprueba','bryjo954','restaurantprueba');
/*$datos = array("tipo" =>"$camp1","tipo2" =>"$camp2","tipo3" => "$camp3", "tipo4"=> "$camp4");
$statement=$connection->prepare("CALL insertcrearplato(?,?,?,?)");
$statement->bind_param("ssss",$datos["tipo"],$datos["tipo2"],$datos["tipo3"],$datos["tipo4"]);*/
$consulta = "INSERT INTO crearplato(tipo,tipo2,tipo3,tipo4,PRECIO) VALUES('$camp1','$camp2','$camp3','$camp4',10)";
$resultado = mysqli_query($conexion,$consulta);
mysqli_close($conexion);
/*echo $salto;
echo $salto;
echo $camp1;
echo $salto;
echo $salto;
echo $camp2;
echo $salto;
echo $salto;
echo $camp3;
echo $salto;
echo $salto;
echo $camp4;

*/

 ?>
 <div class="container">
 <div class="container">
 <div class="container">
    <div class="col-md-6">
<div class="alert alert-warning" role="alert"><?php
echo $camp1;
?></div>
<br>
<div class="alert alert-warning" role="alert"><?php
echo $camp2;
?></div>
<br>
<div class="alert alert-warning" role="alert"><?php
echo $camp3;
?></div>
<br>
<div class="alert alert-warning" role="alert"><?php
echo $camp4 ;
?></div></div>
<div class="col-md-6">

<div class="panel panel-info">
<div class="panel-heading"> ------------- </div>
<div class="panel-body">
Su pedido tiene un tiempo de 15 minutos.
</div>
</div>

</div>


</div></div></div>
</div>




                                                       <!--FIN INGREDIENTE 4-->



<!--FIN PANELES-->



</body>
</html>
