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
<h1> Pedidos </h1>
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

<img src="imagenes/publi1.jpg" class="img-responsive">
<img src="imagenes/publi1.jpg" class="img-responsive">
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
   Pedidos actuales en la lista
  </div>
</div>


<?php
$conexion=mysqli_connect('localhost','root','','restaurant');
 ?>
<div class="container-fluid">
<div class="col-md-6">
<div class="table-responsive">
<table class="table" border="1">
<tr>
<td>CODIGO</td>
<td>ENTRADA</td>
<td>SEGUNDO</td>
<td>POSTRE</td>
<td>BEBIDA</td>
<td>PRECIO</td>
</tr>



<?php
$sql="SELECT * FROM pedido";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
  ?>


  <tr>
    <td><?php echo $mostrar['Codigo']?></td>
    <td><?php echo $mostrar['Entrada']?></td>
    <td><?php echo $mostrar['Segundo']?></td>
    <td><?php echo $mostrar['Postre']?></td>
    <td><?php echo $mostrar['Bebida']?></td>
    <td><?php echo $mostrar['Precio']?></td>
  </tr>

</div>
</div>

<div class="col-md-6">




</div>

</div>


  <?php
}
 ?>
</table>





<br>
<br>
<br>

<div class="container-fluid">
  <div class="col-md-6">
<div class="table-responsive">
<table class="table" border="1">
<tr>
<td>Codigo</td>
<td>Tipo</td>
<td>Tipo2</td>
<td>Tipo3</td>
<td>Tipo4</td>
<td>Precio</td>
</tr>


<?php
$sql="SELECT * FROM crearplato";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
  ?>


  <tr>
    <td><?php echo $mostrar['codigo']?></td>
    <td><?php echo $mostrar['tipo']?></td>
    <td><?php echo $mostrar['tipo2']?></td>
    <td><?php echo $mostrar['tipo3']?></td>
    <td><?php echo $mostrar['tipo4']?></td>
    <td><?php echo $mostrar['PRECIO']?></td>
  </tr>
</div>
</div>
<div class="col-md-6">
</div>

</div>
  <?php
}
 ?>
</table>
</div>




                                                       <!--FIN INGREDIENTE 4-->



<!--FIN PANELES-->



</body>
</html>
