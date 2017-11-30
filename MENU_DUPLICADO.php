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

<script>
function cam1(){
  document.miForumlario.campo1.defaultValue="Tequeños"
}
</script>
<script>
function cam2(){
  document.miForumlario.campo1.defaultValue="Huancaina"
}
</script>

<script>
function cam3(){
  document.miForumlario.campo1.defaultValue="Ensalada"
}
</script>
<script>
function cam4(){
  document.miForumlario.campo1.defaultValue="Huevo"
}
</script>

<script>
function cam5(){
  document.miForumlario.campo1.defaultValue="Sopa"
}
</script>
<script>
function cam6(){
  document.miForumlario.campo2.defaultValue="Lomo"
}
</script>
<script>
function cam7(){
  document.miForumlario.campo2.defaultValue="Arroz_Pollo"
}
</script>
<script>
function cam8(){
  document.miForumlario.campo2.defaultValue="Pure"
}
</script>
</div>
<script>
function cam9(){
  document.miForumlario.campo2.defaultValue="Tallarines"
}
</script>
<script>
function cam10(){
  document.miForumlario.campo2.defaultValue="Seco"
}
</script>
<script>
function cam11(){
  document.miForumlario.campo3.defaultValue="Mazamorra"
}
</script>
<script>
function cam12(){
  document.miForumlario.campo3.defaultValue="Gelatina"
}
</script>
<script>
function cam13(){
  document.miForumlario.campo3.defaultValue="Keke"
}
</script>
<script>
function cam14(){
  document.miForumlario.campo3.defaultValue="Ensalada_frutas"
}
</script>
<script>
function cam15(){
  document.miForumlario.campo3.defaultValue="Helado"
}
</script>
<script>
function cam16(){
  document.miForumlario.campo4.defaultValue="Vaso_Agua"
}
</script>
<script>
function cam17(){
  document.miForumlario.campo4.defaultValue="Chicha"
}
</script>
<script>
function cam18(){
  document.miForumlario.campo4.defaultValue="Gaseosa"
}
</script>
<script>
function cam19(){
  document.miForumlario.campo4.defaultValue="Limonada"
}
</script>
<script>
function cam20(){
  document.miForumlario.campo4.defaultValue="Cerveza"
}
</script>
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

<aside>
<!-- Large button group -->



<form name="miForumlario" action="menurecibido.php" method="post">

<input type="Text" name="campo1" size="12">


<input type="Text" name="campo2" size="12">

<input type="Text" name="campo3" size="12">

<input type="Text"name="campo4" size="12">

<input class="btn btn-danger " role="button" value="ENVIAR" type="submit">



<div class="collapse" id="collapseExample1">
  <div class="well letritas">

  </div>
</div>


</aside>
</div>
<div class="col-md-8">





<h3> ENTRADAS</h3>


<strong> PRUEBE DE NUESTRA RICA VARIEDAD DE ENTRADAS DISPONIBLES ESTE DIA.</strong>




<ul class="list-group">
  <li class="list-group-item" >Tequeños
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
        <h4 class="modal-title" id="myModalLabel">Tequeños</h4>
      </div>
      <div class="modal-body">
       <p>El tequeño, dedito de queso o dedito es una comida popular en Venezuela y Colombia, utilizado normalmente como entremés en fiestas y reuniones, como desayuno, como comida rápida o como merienda. Consiste en una masa de harina de trigo frita, rellena de queso blanco. En Colombia es denominado dedito de queso, palito de queso o simplemente dedito, aunque hay de varios tamaños y se les puede agregar bocadillo, dulce típico en Colombia, Panamá y Venezuela. Los deditos también pueden ser horneados. </p>
       <img src="imagenes/tequeños.jpg" class="img-responsive">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" data-dismiss="modal" value="Aceptar" name="" onclick="cam1()">
      </div>
    </div>
  </div>
</div>
 </li>



 <li class="list-group-item" >Papa a la Huancaina
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
       <h4 class="modal-title" id="myModalLabel">Papa a la Huancaina</h4>
     </div>
     <div class="modal-body">
      <p>Se dice que esta receta tiene su origen en Lima-Perú, desde fines del siglo XIX cuando se sirvieron las “papas amarillas a la huancaína” como una de las entradas en el banquete ofrecido al Capitán peruano de Navío Miguel Grau Seminario. El nombre de esta receta radica en la región peruana “Junín”. Dicen que el creador de esta receta compraba la papa en Huancayo - en el Valle del Río Mantaro, luego para homenajear esta región se le dio el nombre a la receta de “Papa a la Huancayo - Huancaína”.</p>
      <img src="imagenes/papa_huancaina.jpg" class="img-responsive">
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <input type="button" class="btn btn-primary" data-dismiss="modal" value="Aceptar" name="" onclick="cam2()">
     </div>
   </div>
 </div>
</div>
</li>



<li class="list-group-item" >Ensalada Mixta
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
      <h4 class="modal-title" id="myModalLabel">Ensalada Mixta</h4>
    </div>
    <div class="modal-body">
    <p>Una ensalada es, en líneas generales, un plato frío con hortalizas mezcladas, cortadas en trozos y aderezadas, fundamentalmente con sal, jugo de limón, aceite de oliva y vinagre. Puede tomarse como plato único, antes o después del plato principal e incluso como complemento (para picar).</p>
    <img src="imagenes/ensalada.jpg" class="img-responsive">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Aceptar" data-dismiss="modal" name="" onclick="cam3()">
    </div>
  </div>
</div>
</div>
</li>



<li class="list-group-item" >Huevo a la rusa
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
      <h4 class="modal-title" id="myModalLabel">Huevo a la rusa</h4>
    </div>
    <div class="modal-body">
    <p>Una ensalada es, en líneas generales, un plato frío con hortalizas mezcladas, cortadas en trozos y aderezadas, fundamentalmente con sal, jugo de limón, aceite de oliva y vinagre. Puede tomarse como plato único, antes o después del plato principal e incluso como complemento (para picar).</p>
    <img src="imagenes/huevo.png" class="img-responsive">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Aceptar" data-dismiss="modal" name="" onclick="cam4()">
    </div>
  </div>
</div>
</div>
</li>



<li class="list-group-item" >Sopa
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
      <h4 class="modal-title" id="myModalLabel">Sopa</h4>
    </div>
    <div class="modal-body">
      <p>El caldo de pollo (denominado a veces como sopa de pollo o caldo de gallina) es una sopa. A menudo se sirve con trozos de carne o con granos de arroz o cebada, pasta, zanahoria amarilla, apio, cebolla blanca, etc. Se considera también un remedio casero contra los enfriamientos y los catarros.
      </p>
    <img src="imagenes/sopa.jpeg" class="img-responsive">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Aceptar" data-dismiss="modal" name="" onclick="cam5()">
    </div>
  </div>
</div>
</div>
</li>
</ul>



<h3> SEGUNDOS</h3>


<strong > LOS DIVERSOS PLATOS DE NUESTRA SELECCION ESTAN PARA SATISFACERLO</strong>
<ul class="list-group">
  <li class="list-group-item" >Lomo Saltado
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
        <h4 class="modal-title" id="myModalLabel">Lomo Saltado</h4>
      </div>
      <div class="modal-body">
      <p>El plato tal como se definió en aquella época y se le conoce actualmente surge por la influencia de los chinos-cantoneses, contiene la sazón y la mezcla de la cocina criolla peruana con la oriental. La influencia oriental se demuestra por el uso de la técnica de cocción en sartén, ahora conocida como «lomo saltado».2​ Hay variantes introducidas en este plato, porque dependiendo del gusto, se han reemplazado unos ingredientes por otros. Este plato es uno de los más consumidos popularmente en el Perú.</p>
      <img src="imagenes/lomo.jpg" class="img-responsive">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" value="Aceptar" data-dismiss="modal" name="" onclick="cam6()">
      </div>
    </div>
  </div>
</div>
 </li>
 <li class="list-group-item" >Arroz con Pollo
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
       <h4 class="modal-title" id="myModalLabel">Arroz con Pollo</h4>
     </div>
     <div class="modal-body">
      <p>El arroz con pollo es un plato típico de España y América Latina1​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras (ají pimentón, zanahoria en cubos, apio, habichuelas, cebolla, maíz desgranado, aceitunas, arvejas, alcaparras), y sazonado con especias (laurel, tomillo, cilantro, ajo).
      </p>
      <img src="imagenes/arroz_pollo.jpg" class="img-responsive">
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <input type="button" class="btn btn-primary" value="Aceptar" data-dismiss="modal" name="" onclick="cam7()">
     </div>
   </div>
 </div>
</div>
</li>
<li class="list-group-item" >Pure con Pollo
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
      <h4 class="modal-title" id="myModalLabel">Pure con Pollo</h4>
    </div>
    <div class="modal-body">
    <p>Adereza el pollo con sal y pimienta y colócalo en una fuente. Úntalo con mantequilla y cúbrelo. Ponlo en el frigorífico por lo menos por 2 horas. Retira el pollo del frigorífico y cúbrelo con la harina.
Vierte el aceite de oliva virgen en una sartén grande. Ve friendo las partes del pollo por ambos lados y retíralas sobre servilletas de papel absorbentes y luego sirve.
    </p>
    <img src="imagenes/pure.jpg" class="img-responsive">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Aceptar" data-dismiss="modal" name="" onclick="cam8()">
    </div>
  </div>
</div>
</div>
</li>
<li class="list-group-item" >Tallarines Rojos
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
      <h4 class="modal-title" id="myModalLabel">Tallarines Rojos</h4>
    </div>
    <div class="modal-body">
    <p>Tal vez los tallarines rojos sean el mejor ejemplo de la fusión entre la gastronomía peruana y la italiana. Este sabroso platillo no es otra cosa que la versión peruana de los espaguetis con ragú. Muy fiel al estilo y sazón peruano, esta preparación sufrió algunas sabrosas variaciones, para terminar siendo lo que hoy es, una de las predilectas recetas peruanas.</p>
    <img src="imagenes/tallarin.jpg" class="img-responsive">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Aceptar" data-dismiss="modal" name="" onclick="cam9()">
    </div>
  </div>
</div>
</div>
</li>
<li class="list-group-item" >Seco de Pollo
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
      <h4 class="modal-title" id="myModalLabel">Seco de Pollo</h4>
    </div>
    <div class="modal-body">
    <p>El seco de pollo es un plato típico de la Gastronomía de Ecuador y norte del Perú donde el principal ingrediente es la carne de pollo (en forma de cuartos) que es asada en una olla junto con otros ingredientes: tomate, cebolla, pimiento, etc y especias como "hierbita" o cilantro y el jugo de la naranjilla (Solanum quitoense), originaria del Ecuador. Se considera un plato festivo que se sirve caliente como plato único. En el caso ecuatoriano, el seco es un plato que tiene ciertas variantes, como el seco manabita que suele llevar yuca y verduras, en la sierra suele servirse con arroz blanco y en la provincia de Imbabura se sirve con papas y aguacate o palta. El seco en la costa del Ecuador, en especial en la provincia del Guayas es un plato típico y de elaboración no muy compleja, se sirve con arroz colorado, que en la cocción lleva achiote y un condimento similar al pimentón en polvo que se denomina ají para seco o ají peruano (que no es de Perú) con "hierbita" o cilantro, lleva cerveza, jugo de naranjilla (lulo) o chicha de maíz que le da un toque de acidez.
    </p>
    <img src="imagenes/seco.jpg" class="img-responsive">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Aceptar" data-dismiss="modal" name="" onclick="cam10()">
    </div>
  </div>
</div>
</div>
</li>
</ul>



<h3> POSTRES</h3>


<strong > LOS DELICIOSOS POSTRES DE UNA GRAN SELECCION</strong>
<ul class="list-group">
  <li class="list-group-item" >Mazamorra Morada
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
        <h4 class="modal-title" id="myModalLabel">Mazamorra Morada</h4>
      </div>
      <div class="modal-body">
      <p>
        La mazamorra morada es un postre típico de la gastronomía peruana elaborado a base de maíz morado concentrado con fécula. Este postre se prepara especialmente en el mes de octubre, en donde se conmemora el mes del Señor de los Milagros.

El consumo de mazamorra morada está muy extendido, existiendo puntos de venta en la calle que venden porciones de este y otros postres tradicionales de la gastronomía peruana, como por ejemplo el arroz con leche, el arroz zambito, la mazamorra de calabaza y bebidas como champús.
      </p>
      <img src="imagenes/mazamorra.jpg" class="img-responsive">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" value="Aceptar" data-dismiss="modal" name="" onclick="cam11()">
      </div>
    </div>
  </div>
</div>
 </li>
 <li class="list-group-item" >Gelatina
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
       <h4 class="modal-title" id="myModalLabel">Gelatina</h4>
     </div>
     <div class="modal-body">
       <p>
         La gelatina es un coloide gel (es decir, una mezcla semisólida a temperatura ambiente), incolora, translúcida, quebradiza e insípida, que se obtiene a partir del colágeno procedente del tejido conectivo de animales hervidos con agua.

La gelatina es una proteína compleja, es decir, un polímero compuesto de aminoácidos. Como sucede con los polisacáridos, el grado de polimerización, la naturaleza de los monómeros y la secuencia en la cadena proteica determinan sus propiedades generales. Una notable propiedad de las disoluciones de esta molécula es su comportamiento frente a temperaturas diferentes: son líquidas en agua caliente (coloide tipo sol) y se solidifican en agua fría (coloide tipo gel).
       </p>
      <img src="imagenes/gelatina.jpg" class="img-responsive">
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <input type="button" class="btn btn-primary" value="Aceptar" data-dismiss="modal" name="" onclick="cam12()">
     </div>
   </div>
 </div>
</div>
</li>
<li class="list-group-item" >Keke Marmoleado
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
      <h4 class="modal-title" id="myModalLabel">Keke Marmoleado</h4>
    </div>
    <div class="modal-body">
    <p>El chocolate y la vainilla se juntaron para hacer realidad este delicioso Keke Marmoleado, la mejor combinación para aquellos que disfrutan estos clásicos sabores.</p>
    <img src="imagenes/keke.jpg" class="img-responsive">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Aceptar" name="" data-dismiss="modal" onclick="cam13()">
    </div>
  </div>
</div>
</div>
</li>
<li class="list-group-item" >Ensalada de Frutas
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
      <h4 class="modal-title" id="myModalLabel">Ensalada de Frutas</h4>
    </div>
    <div class="modal-body">
    <p>Ensalada de frutas. Postre frío elaborado con varias frutas generalmente aromatizadas con jarabe perfumado, a veces con aguardiente o licor. Las frutas pueden ser crudas, secas y rehidratadas, o pochadas y enfriadas. Las ensaladas de frutas se combinan a veces con helados y sorbetes de frutas o de vainilla.</p>
    <img src="imagenes/ensalada_frutas.jpg" class="img-responsive">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Aceptar" name="" data-dismiss="modal" onclick="cam14()">
    </div>
  </div>
</div>
</div>
</li>
<li class="list-group-item" >Helado
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
      <h4 class="modal-title" id="myModalLabel">Helado</h4>
    </div>
    <div class="modal-body">
      <p>En su forma más simple, el helado o crema helada es un alimento congelado que por lo general se hace de productos lácteos tales como leche, crema y a menudo en combinación con frutas u otros ingredientes y sabores. Generalmente se endulza con azúcar, saborizantes, edulcorantes o miel. Típicamente se le añaden otros ingredientes tales como yemas de huevo, nueces, frutas, chocolate, galletas, frutos secos, yogur y sustancias estabilizantes.
      </p>
    <img src="imagenes/helado.jpg" class="img-responsive">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Aceptar" name="" data-dismiss="modal" onclick="cam15()">
    </div>
  </div>
</div>
</div>
</li>
</ul>




<h3> BEBIDAS</h3>


<strong> LO ULTIMO EN BEBIDAS PARA SU GUSTO</strong>
<ul class="list-group">
  <li class="list-group-item" >Vaso con Agua
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
        <h4 class="modal-title" id="myModalLabel">Vaso con Agua</h4>
      </div>
      <div class="modal-body">
      <p>
        Un Simple Vaso con Agua
      </p>
      <img src="imagenes/vaso_agua.jpg" class="img-responsive">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="button" class="btn btn-primary" value="Aceptar" name="" data-dismiss="modal" onclick="cam16()">
      </div>
    </div>
  </div>
</div>
 </li>
 <li class="list-group-item" >Chicha Morada
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
       <h4 class="modal-title" id="myModalLabel">Chicha Morada</h4>
     </div>
     <div class="modal-body">
    <p>La chicha morada es una bebida originaria de la región andina del Perú pero cuyo consumo actualmente se encuentra extendido a nivel nacional.​ El insumo principal de la bebida es el maíz culli o ckolli, que es una variedad peruana de maíz morado que se cultiva ampliamente en la cordillera de los Andes.​</p>
    <img src="imagenes/chicha.jpg" class="img-responsive">
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <input type="button" class="btn btn-primary" value="Aceptar" name="" data-dismiss="modal" onclick="cam17()">
     </div>
   </div>
 </div>
</div>
</li>
<li class="list-group-item" >Gaseosas
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
      <h4 class="modal-title" id="myModalLabel">Gaseosas</h4>
    </div>
    <div class="modal-body">
    <p>Coca-Cola es una bebida gaseosa y refrescante, vendida a nivel mundial, en tiendas, restaurantes y máquinas expendedoras en más de doscientos países o territorios. Es un producto de The Coca-Cola Company. En un principio, cuando la inventó el farmacéutico John Pemberton, fue concebida como una bebida medicinal patentada, aunque fue adquirida posteriormente por el empresario Asa Griggs Candler, cuyas tácticas de mercadeo hicieron de la bebida una de las más consumidas del siglo XX, y del XXI.</p>
    <img src="imagenes/gaseosa.jpg" class="img-responsive">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Aceptar" name="" data-dismiss="modal" onclick="cam18()">
    </div>
  </div>
</div>
</div>
</li>
<li class="list-group-item" >Limonada
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
      <h4 class="modal-title" id="myModalLabel">Limonada</h4>
    </div>
    <div class="modal-body">
      <p>La limonada es una bebida de elaboración usualmente casera, a base de limón, agua y azúcar, que puede tener o no contenido alcohólico. En algunos idiomas, como el alemán, se llama también limonada a cualquier bebida refrescante no alcohólica, como las gaseosas.</p>
    <img src="imagenes/limonada.jpg" class="img-responsive">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Aceptar" name="" data-dismiss="modal" onclick="cam19()">
    </div>
  </div>
</div>
</div>
</li>
<li class="list-group-item" >Cerveza
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
      <h4 class="modal-title" id="myModalLabel">Cerveza</h4>
    </div>
    <div class="modal-body">
      <p>Es una bebida alcohólica, no destilada, de sabor amargo, que se fabrica con granos de cebada germinados u otros cereales cuyo almidón se fermenta en agua con levadura (básicamente Saccharomyces cerevisiae o Saccharomyces pastorianus) y se aromatiza a menudo con lúpulo, entre otras plantas.</p>
    <img src="imagenes/cerveza.jpg" class="img-responsive">
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="button" class="btn btn-primary" value="Aceptar" name="" data-dismiss="modal" onclick="cam20()">
    </div>
  </div>
</div>
</div>
</li>
</ul>









</form>
</div>



</div>

</section>
</div>



</div>


</body>
</html>
