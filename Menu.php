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

<img src="imagenes/publi1.jpg" class="img-responsive">
<img src="imagenes/publi1.jpg" class="img-responsive">
</aside>



<div class="col-xs-12 visible-xs visible-sm">
<img src="imagenes/ban6.jpg" class="img-responsive img-rounded">
</div>




</div>

	<!-- Final Contenido1-->


<a class="btn btn-primary" style="background:#D22311" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Información
</a>

<div class="collaps" id="collapseExample">
  <div class="well">
   Revisa nuestro menú y escoge la variedad de platos que más se adecue a tu gusto.
   Precio:S/7.00
  </div>
</div>

<div class="container">
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Listado</a></li>
  <li role="presentation"><a href="#"></a></li>
  <li role="presentation"><a href="#"></a></li>
  <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar ingrediente">
        </div>
        <button type="submit" class="btn btn-danger">Buscar</button>
      </form>
</ul>

<!-- INICIAR SECCION INGREDIENTES -->


<div class="row">
<div class="col-md-4">
<h3> ACEPTAR PLATOS</h3>
<form method="get" action="menurecibido.php">
<aside>
<!-- Large button group -->


<form></form>
<form name="numero">
<input type="text" id="entrada" name="resultado" size="12">
</form>
<form name="numero1">
<input type="text" id="segundos" name="resultado1" size="12">
</form>
<form name="numero2">
<input type="text" id="bebidas" name="resultado2" size="12">
</form>
<form name="numero3">
<input type="text" id="postre" name="resultado3" size="12">
</form>
<input class="btn btn-danger " role="button" value="ENVIAR" name="total" type="submit">

</form>

<div class="collapse" id="collapseExample1">
  <div class="well letritas">

  </div>
</div>


</aside>
</div>
<div class="col-md-8">





<h3> ENTRADAS</h3>


<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>




<ul class="list-group">
  <li class="list-group-item" >Entrada 1
  <button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal1">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Estofado de pollo</h4>
      </div>
      <div class="modal-body">
       <p> </p>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" data-dismiss="modal" value="Entrada1" id="prueba" name="" onclick="numero.resultado.value=this.value">
      </div>
    </div>
  </div>
</div>
 </li>



 <li class="list-group-item" >Entrada 2
 <button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal2">
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Entrada2</h4>
     </div>
     <div class="modal-body">
       ...
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <input type="button" class="btn btn-primary" id="prueba2" data-dismiss="modal" value="Entrada2" name="" onclick="numero.resultado.value=this.value">
     </div>
   </div>
 </div>
</div>
</li>



<li class="list-group-item" >Entrada 3
<button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal3">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
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
      <input type="button" class="btn btn-primary" value="Entrada3" data-dismiss="modal" name="" onclick="numero.resultado.value=this.value">
    </div>
  </div>
</div>
</div>
</li>



<li class="list-group-item" >Entrada 4
<button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal4">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Entrada4</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Entrada4" data-dismiss="modal" name="" onclick="numero.resultado.value=this.value">
    </div>
  </div>
</div>
</div>
</li>



<li class="list-group-item" >Entrada 5
<button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal5">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Entrada5</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Entrada5" data-dismiss="modal" name="" onclick="numero.resultado.value=this.value">
    </div>
  </div>
</div>
</div>
</li>
</ul>



<h3> SEGUNDOS</h3>


<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<ul class="list-group">
  <li class="list-group-item" >Segundos1
  <button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal6">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Segundos1</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" value="Segundo1" data-dismiss="modal" name="" onclick="numero1.resultado1.value=this.value">
      </div>
    </div>
  </div>
</div>
 </li>
 <li class="list-group-item" >Segundos2
 <button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal7">
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Segundos2</h4>
     </div>
     <div class="modal-body">
       ...
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <input type="button" class="btn btn-primary" value="Segundo2" data-dismiss="modal" name="" onclick="numero1.resultado1.value=this.value">
     </div>
   </div>
 </div>
</div>
</li>
<li class="list-group-item" >Segundos3
<button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal8">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Segundos3</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Segundo3" data-dismiss="modal" name="" onclick="numero1.resultado1.value=this.value">
    </div>
  </div>
</div>
</div>
</li>
<li class="list-group-item" >Segundos4
<button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal9">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Segundos4</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Segundo4" data-dismiss="modal" name="" onclick="numero1.resultado1.value=this.value">
    </div>
  </div>
</div>
</div>
</li>
<li class="list-group-item" >Segundos5
<button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal10">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Segundos5</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Segundo5" data-dismiss="modal" name="" onclick="numero1.resultado1.value=this.value">
    </div>
  </div>
</div>
</div>
</li>
</ul>



<h3> POSTRES</h3>


<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<ul class="list-group">
  <li class="list-group-item" >Postre1
  <button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal11">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Postre1</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" value="Postre1" data-dismiss="modal" name="" onclick="numero2.resultado2.value=this.value">
      </div>
    </div>
  </div>
</div>
 </li>
 <li class="list-group-item" >Postre2
 <button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal12">
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Postre2</h4>
     </div>
     <div class="modal-body">
       ...
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <input type="button" class="btn btn-primary" value="Postre2" data-dismiss="modal" name="" onclick="numero2.resultado2.value=this.value">
     </div>
   </div>
 </div>
</div>
</li>
<li class="list-group-item" >Postre3
<button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal13">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Postre3</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Postre3" name="" data-dismiss="modal" onclick="numero2.resultado2.value=this.value">
    </div>
  </div>
</div>
</div>
</li>
<li class="list-group-item" >Postre4
<button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal14">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Postre4</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Postre4" name="" data-dismiss="modal" onclick="numero2.resultado2.value=this.value">
    </div>
  </div>
</div>
</div>
</li>
<li class="list-group-item" >Postre5
<button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal15">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Postre5</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Postre5" name="" data-dismiss="modal" onclick="numero2.resultado2.value=this.value">
    </div>
  </div>
</div>
</div>
</li>
</ul>




<h3> BEBIDAS</h3>


<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<ul class="list-group">
  <li class="list-group-item" >Bebida1
  <button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal16">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Bebida1</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" value="bebida1" name="" data-dismiss="modal" onclick="numero3.resultado3.value=this.value">
      </div>
    </div>
  </div>
</div>
 </li>
 <li class="list-group-item" >Bebida2
 <button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal17">
 <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Bebida2</h4>
     </div>
     <div class="modal-body">
       ...
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <input type="button" class="btn btn-primary" value="bebida2" name="" data-dismiss="modal" onclick="numero3.resultado3.value=this.value">
     </div>
   </div>
 </div>
</div>
</li>
<li class="list-group-item" >Bebida3
<button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal18">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Bebida3</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="bebida3" name="" data-dismiss="modal" onclick="numero3.resultado3.value=this.value">
    </div>
  </div>
</div>
</div>
</li>
<li class="list-group-item" >Bebida4
<button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal19">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Bebida4</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="bebida4" name="" data-dismiss="modal" onclick="numero3.resultado3.value=this.value">
    </div>
  </div>
</div>
</div>
</li>
<li class="list-group-item" >Bebida5
<button type="button" class="btn pull-right btn-default btn-sm" data-toggle="modal" data-target="#myModal20">
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Bebida5</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="bebida5" name="" data-dismiss="modal" onclick="numero3.resultado3.value=this.value">
    </div>
  </div>
</div>
</div>
</li>
</ul>










</div>



</div>

</section>
</div>



</div>


</body>
</html>
