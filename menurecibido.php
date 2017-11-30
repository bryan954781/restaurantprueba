<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<script src="js/bootstrap.min.js"></script>
<title>Menú</title>
</head>

<body>

<header class="container-fluid fondito">
<div class="container">
<h1> Menú</h1>
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



</aside>



<div class="col-xs-12 visible-xs visible-sm">
<img src="imagenes/ban6.jpg" class="img-responsive img-rounded">
</div>

</br>
</br>




</div>

	<!-- Final Contenido1-->

</br>
<div class="container-fluid">
  <div class="col-md-12 col-sm-12">
 <div class="jumbotron">
    <h2>Su Pedido se realizo con éxito</h2>
  <p>Su Código de Pedido es el siguiente:</p>
  <p><a class="btn btn-danger btn-lg" href="#" role="button">77745456</a></p>
</div>
</div>
</div>




     <?php

     $campo = $_POST['campo1'];

     $campo2 = $_POST['campo2'];

     $campo3 = $_POST['campo3'];

     $campo4 = $_POST['campo4'];


     $conexion=mysqli_connect('mysql.webcindario.com','restaurantprueba','bryjo954','restaurantprueba');

    /* $datos = array("Entrada" =>"$campo","Segundo" =>"$campo2","Postre" => "$campo3", "Bebida"=> "$campo4");
     $statement=$connection->prepare("CALL insertpedido(?,?,?,?)");
     $statement->bind_param("ssss",$datos["Entrada"],$datos["Segundo"],$datos["Postre"],$datos["Bebida"]);*/
     $consulta = "INSERT INTO pedido(Entrada,Segundo,Postre,Bebida,Precio) VALUES('$campo','$campo2','$campo3','$campo4',7)";

     $resultado = mysqli_query($conexion,$consulta);
     mysqli_close($conexion);

     ?>
     <div class="container">
     <div class="container">
     <div class="container">
        <div class="col-md-6">
    <div class="alert alert-warning" role="alert"><?php
    echo $campo;
    ?></div>
    <br>
    <div class="alert alert-warning" role="alert"><?php
    echo $campo2;
    ?></div>
    <br>
    <div class="alert alert-warning" role="alert"><?php
    echo $campo3;
    ?></div>
    <br>
    <div class="alert alert-warning" role="alert"><?php
    echo $campo4 ;
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

</section>
</div>



</div>


</body>
</html>
