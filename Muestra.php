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

<?php

$mysql_usuario = "root";
$mysql_password = "";
$mysql_host = "localhost";
$mysql_database = "restaurant";


 $conexion=mysqli_connect('mysql.webcindario.com','restaurantprueba','bryjo954','restaurantprueba');


$consulta = "SELECT * FROM pedido";


$resultado = mysqli_query($conexion, $consulta);


$table = "<table border='1' cellpadding='10'>\n";
$table .= "<tr><th>Codigo</th><th>Entrada</th><th>Segundo</th><th>Postre</th><th>Bebida</th><th>Precio</th><th></th></tr>\n";
while($fila = mysqli_fetch_assoc($resultado)){
$table .= "<tr>
      <td>".$fila["Codigo"]."</td>
      <td>".$fila["Entrada"]."</td>
      <td>".$fila["Segundo"]."</td>
      <td>".$fila["Postre"]."</td>
      <td>".$fila["Bebida"]."</td>
      <td>".$fila["Precio"]."</td>
      <td><form method='post' action=''> \n
      <input type='hidden' name='codigo' value='".$fila["Codigo"]."'>
      <input type='submit' value='Cancelar'>
      </form>
      <form method='post' action=''> \n
      <input type='hidden' name='codigo1' value='".$fila["Codigo"]."'>
      <input type='submit' value='Aceptar'>
      </form></td>
   </tr>\n";
    }
$table .= "</table>\n";




if (isset($_POST["codigo"]))
{

$code = $_POST["codigo"];


$consulta = "DELETE FROM pedido WHERE codigo=$code";


$resultado = mysqli_query($conexion,$consulta);



header("location: Muestra.php");
}
if(isset($_POST["codigo1"])){

  $id_codigo = $_POST["codigo1"];
  $consulta = "SELECT * FROM pedido where Codigo=$id_codigo";
  $resultado = mysqli_query($conexion,$consulta);
  $fila = mysqli_fetch_row($resultado);
  $dato1 = $fila[0];
  $dato2 = $fila[1];
  $dato3 = $fila[2];
  $dato4 = $fila[3];
  $dato5 = $fila[4];
  $dato6 = $fila[5];

$consulta = "INSERT INTO ventas_pedidos(codigo_pedidos,ESPECIFICACION1,ESPECIFICACION2,ESPECIFICACION3,ESPECIFICACION4,PRECIO) VALUES($dato1,'$dato2','$dato3','$dato4','$dato5','$dato6')";
$resultado = mysqli_query($conexion,$consulta);



$consulta = "DELETE FROM pedido WHERE Codigo=$dato1";
$resulta = mysqli_query($conexion,$consulta);
header("location: Muestra.php");


  /*echo $dato1;
  echo $dato2;
  echo $dato3;
  echo $dato4;
  echo $dato5;
  echo $dato6;*/

/*
  require_once('procesos/ConectarBD.php');
     $mysql = new Conexion();
     $connection = $mysql->get_connection();

     $datos = array("codigo_crearplato" =>"$dato1","ESPECIFICACION1" =>"$dato2","ESPECIFICACION2" => "$dato3", "ESPECIFICACION3"=> "$dato4", "ESPECIFICACION4"=> "$dato5", "PRECIO"=> "$dato6");
     $statement=$connection->prepare("CALL INSERTVENTAS_CREARPLATO(?,?,?,?,?,?)");
     $statement->bind_param("ssss",$datos["codigo_crearplato"],$datos["ESPECIFICACION1"],$datos["ESPECIFICACION2"],$datos["ESPECIFICACION3"],$datos["ESPECIFICACION4"],$datos["PRECIO"]);
     $statement->execute();
     $statement->close();
     $connection->close();

     $datos = array("codigo" =>"$dato1");
     $statement=$connection->prepare("CALL INSERTVENTAS_CREARPLATO(?)");
     $statement->bind_param("ssss",$datos["codigo"]);
     $statement->execute();
     $statement->close();
     $connection->close();
*/

}

?>

<?php
/*
$mysql_usuario = "root";
$mysql_password = "";
$mysql_host = "localhost";
$mysql_database = "restaurant";
*/

 $conexion=mysqli_connect('mysql.webcindario.com','restaurantprueba','bryjo954','restaurantprueba');


$consulta = "SELECT * FROM crearplato";


$resultado = mysqli_query($conexion, $consulta);


$tabla = "<table border='1' cellpadding='10'>\n";
$tabla .= "<tr><th>Codigo</th><th>TIPO1</th><th>TIPO2</th><th>TIPO3</th><th>TIPO4</th><th>Precio</th><th></th></tr>\n";
while($fila = mysqli_fetch_assoc($resultado)){
$tabla .= "<tr>
      <td>".$fila["codigo"]."</td>
      <td>".$fila["tipo"]."</td>
      <td>".$fila["tipo2"]."</td>
      <td>".$fila["tipo3"]."</td>
      <td>".$fila["tipo4"]."</td>
      <td>".$fila["PRECIO"]."</td>
      <td><form method='post' action=''> \n
      <input type='hidden' name='codigo' value='".$fila["codigo"]."'>
      <input type='submit' value='Cancelar'>
      </form>
      <form method='post' action=''> \n
      <input type='hidden' name='codigo1' value='".$fila["codigo"]."'>
      <input type='submit' value='Aceptar'>
      </form></td>
   </tr>\n";
    }
$tabla .= "</table>\n";




if (isset($_POST["codigo"]))
{

$code = $_POST["codigo"];


$consulta = "DELETE FROM crearplato WHERE codigo=$code";


$resultado = mysqli_query($conexion,$consulta);



header("location: Muestra.php");
}
if(isset($_POST["codigo1"])){

  $id_codigo = $_POST["codigo1"];
  $consulta = "SELECT * FROM crearplato where codigo=$id_codigo";
  $resultado = mysqli_query($conexion,$consulta);
  $fila = mysqli_fetch_row($resultado);
  $dato1 = $fila[0];
  $dato2 = $fila[1];
  $dato3 = $fila[2];
  $dato4 = $fila[3];
  $dato5 = $fila[4];
  $dato6 = $fila[5];

$consulta = "INSERT INTO ventas_crearplato(codigo_crearplato,ESPECIFICACION1,ESPECIFICACION2,ESPECIFICACION3,ESPECIFICACION4,PRECIO) VALUES($dato1,'$dato2','$dato3','$dato4','$dato5','$dato6')";
$resultado = mysqli_query($conexion,$consulta);



$consulta = "DELETE FROM crearplato WHERE codigo=$dato1";
$resulta = mysqli_query($conexion,$consulta);
header("location: Muestra.php");


  /*echo $dato1;
  echo $dato2;
  echo $dato3;
  echo $dato4;
  echo $dato5;
  echo $dato6;*/

/*
  require_once('procesos/ConectarBD.php');
     $mysql = new Conexion();
     $connection = $mysql->get_connection();

     $datos = array("codigo_crearplato" =>"$dato1","ESPECIFICACION1" =>"$dato2","ESPECIFICACION2" => "$dato3", "ESPECIFICACION3"=> "$dato4", "ESPECIFICACION4"=> "$dato5", "PRECIO"=> "$dato6");
     $statement=$connection->prepare("CALL INSERTVENTAS_CREARPLATO(?,?,?,?,?,?)");
     $statement->bind_param("ssss",$datos["codigo_crearplato"],$datos["ESPECIFICACION1"],$datos["ESPECIFICACION2"],$datos["ESPECIFICACION3"],$datos["ESPECIFICACION4"],$datos["PRECIO"]);
     $statement->execute();
     $statement->close();
     $connection->close();

     $datos = array("codigo" =>"$dato1");
     $statement=$connection->prepare("CALL INSERTVENTAS_CREARPLATO(?)");
     $statement->bind_param("ssss",$datos["codigo"]);
     $statement->execute();
     $statement->close();
     $connection->close();
*/

}

?>
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
$sql="SELECT * FROM ventas_pedidos";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
  ?>


  <tr>
    <td><?php echo $mostrar['codigo_pedidos']?></td>
    <td><?php echo $mostrar['ESPECIFICACION1']?></td>
    <td><?php echo $mostrar['ESPECIFICACION2']?></td>
    <td><?php echo $mostrar['ESPECIFICACION3']?></td>
    <td><?php echo $mostrar['ESPECIFICACION4']?></td>
    <td><?php echo $mostrar['PRECIO']?></td>
  </tr>

</div>
</div>

</div>


  <?php
}
 ?>
</table>



<script>
function aceptar(){
  document.miForumlario.campo1.defaultValue="Aceptar"
}
</script>

<script>
function cancelar(){
  document.miForumlario.campo1.defaultValue="Cancelar"
}
</script>

<form  method="post" name="miForumlario">
<!--
<input type="button" name="borrar" Value="Aceptar" onclick="aceptar()">
<input type="button" name="cancela" value="Cancelar" onclick="cancelar()">
<p>Seguro que desea seguir con la operacion</p>
<input type="text" name="campo1">
<input type="submit" value="Seguir">


<input type="button" name="borrar" Value="Aceptar" >
<input type="button" name="cancela" value="Cancelar" >
-->

</form>
<?/*
if(isset($_POST[borrar])){
  echo $mostrar['Codigo'];
  //$result=mysqli_query($conexion,$sql);
}
if(isset($_POST[cancela])){

}
*/
//echo $mostrar['Codigo'];
?>

<?
while($mostrar=mysqli_fetch_array($result)){
echo $mostrar['Codigo'];
}
?>

<br>
<br>
<br>


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
echo "ESTOS SON LOS PLATOS ATENDIDOS DE LA TABLA CREARPLATO";
$sql="SELECT * FROM ventas_crearplato";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
  ?>


  <tr>
    <td><?php echo $mostrar['Codigo']?></td>
    <td><?php echo $mostrar['ESPECIFICACION1']?></td>
    <td><?php echo $mostrar['ESPECIFICACION2']?></td>
    <td><?php echo $mostrar['ESPECIFICACION3']?></td>
    <td><?php echo $mostrar['ESPECIFICACION4']?></td>
    <td><?php echo $mostrar['PRECIO']?></td>
  </tr>
</div>
</div>



  <?php
}
 ?>
</table>

</div>


<?php


echo $table;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo $tabla;
?>

                                                       <!--FIN INGREDIENTE 4-->



<!--FIN PANELES-->



</body>
</html>


<?php

mysqli_close($conexion);
?>
