<?php  require_once('Connections/conexion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conexion, $conexion);
$query_concreto1 = "SELECT * FROM productos WHERE productos.idproducto=-1";
$concreto1 = mysql_query($query_concreto1, $conexion) or die(mysql_error());
$row_concreto1 = mysql_fetch_assoc($concreto1);
$totalRows_concreto1 = mysql_num_rows($concreto1);

mysql_select_db($database_conexion, $conexion);
$query_bomba1 = "SELECT * FROM bombas WHERE bombas.idBombas=2";
$bomba1 = mysql_query($query_bomba1, $conexion) or die(mysql_error());
$row_bomba1 = mysql_fetch_assoc($bomba1);
$totalRows_bomba1 = mysql_num_rows($bomba1);

mysql_select_db($database_conexion, $conexion);
$query_auto1 = "SELECT * FROM bombas WHERE bombas.idBombas=4";
$auto1 = mysql_query($query_auto1, $conexion) or die(mysql_error());
$row_auto1 = mysql_fetch_assoc($auto1);
$totalRows_auto1 = mysql_num_rows($auto1);

mysql_select_db($database_conexion, $conexion);
$query_concreto2 = "SELECT * FROM productos WHERE productos.idproducto=-2";
$concreto2 = mysql_query($query_concreto2, $conexion) or die(mysql_error());
$row_concreto2 = mysql_fetch_assoc($concreto2);
$totalRows_concreto2 = mysql_num_rows($concreto2);

mysql_select_db($database_conexion, $conexion);
$query_bomba2 = "SELECT * FROM bombas WHERE bombas.idBombas=3";
$bomba2 = mysql_query($query_bomba2, $conexion) or die(mysql_error());
$row_bomba2 = mysql_fetch_assoc($bomba2);
$totalRows_bomba2 = mysql_num_rows($bomba2);

mysql_select_db($database_conexion, $conexion);
$query_auto2 = "SELECT * FROM bombas WHERE bombas.idBombas=5";
$auto2 = mysql_query($query_auto2, $conexion) or die(mysql_error());
$row_auto2 = mysql_fetch_assoc($auto2);
$totalRows_auto2 = mysql_num_rows($auto2);

mysql_select_db($database_conexion, $conexion);
$query_producto3 = "SELECT * FROM productos WHERE productos.idproducto=-3";
$producto3 = mysql_query($query_producto3, $conexion) or die(mysql_error());
$row_producto3 = mysql_fetch_assoc($producto3);
$totalRows_producto3 = mysql_num_rows($producto3);

mysql_select_db($database_conexion, $conexion);
$query_bomba3 = "SELECT * FROM bombas WHERE bombas.idBombas=1";
$bomba3 = mysql_query($query_bomba3, $conexion) or die(mysql_error());
$row_bomba3 = mysql_fetch_assoc($bomba3);
$totalRows_bomba3 = mysql_num_rows($bomba3);

mysql_select_db($database_conexion, $conexion);
$query_auto3 = "SELECT * FROM bombas WHERE bombas.idBombas=6";
$auto3 = mysql_query($query_auto3, $conexion) or die(mysql_error());
$row_auto3 = mysql_fetch_assoc($auto3);
$totalRows_auto3 = mysql_num_rows($auto3);
?>
<!DOCTYPE html>

<html lang="es">
    
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Concrebombas</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/apple-touch-icon-144.png">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img  src="Imagenes/LOGONAME.png" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active" title="Inicio"><a href="#home">Home</a></li>
                            <li title="Servicios"><a href="#service">Servicios</a></li>
                            <li title="Productos"><a href="#portfolio">Portafolio</a></li>
                            <li title="Zona para Empleados"><a href="#about">Empleados</a></li>
                            <li title="Zona de Clientes"><a href="#clients">Clientes</a></li>
                            <li title="Precios"><a href="#price">Precios</a></li>
                            <li title="Contacto y Redes Sociales"><a href="#contact">Contacto</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2">Bienvenidos a CONCREBOMBAS</h2>
                        <h4>Comprometidos con Bogotá</h4>
                        <p>CONCREBOMBAS de Colombia s.a.s es una empresa dedicada y comprometida con las buenas practicas de la construcciòn, para con esto garantizar una imagen de calidad a la bella ciudad de Bogotá y a Colombia!.</p>
                        <div class="da-img">
                            <img src="Imagenes/9878976296_fe9e93a3ed_b.jpg" alt="image01" width="320">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>Cumplimiento</h2>
                        <h4>Certificación y Calidad</h4>
                        <p>Contamos con productos certificados, de calidad y reconocimiento a nivel nacional, maquinaria optima para cualquier trabajo, y personal capacitado para hacer sus proyectos realidad.</p>
                        <div class="da-img">
                            <img src="Imagenes/B50.png" width="320" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        <h2>Confianza</h2>
                        <h4>Todo para su comodidad</h4>
                        <p>Comodidad, confianza, seguridad, certificación, servicio y calidad, herramientas más que necesarias para la creacion de una obra de calidad. la innovacion tecnologica llega a cada usuario en el país.</p>
                       <div class="da-img">
                            <img src="Imagenes/security.png" width="320" alt="image03">
                        </div>
                    </div>
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->
        <!-- Service section start -->
        <div class="section primary-section" id="service">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1 title="Contenido General">¿Qué Hacemos?</h1>
                    <!-- Section's title goes here -->
                    <p>Somos una empresa con más de 6 años de experiencia al servicio del constructor, ofreciendo servicios integrales en pro del crecimiento del país.</p>
                    <!--Simple description for section goes here. -->
                </div>
                <div class="row-fluid">
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="Imagenes/circle1.png" alt="icono de concreto, contiene información sobre el concreto" title="Concreto Certificado">
                            </div>
                            <h3>Cemento & Concreto</h3>
                            <p>Todos los concretos son fabricados y distribuidos con las normas INCONTEC y los requisitos del código colombiano Sismo-Resistente NSR-10.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="Imagenes/circle2.png"  alt="icono de las bombas, contiene información de las bombas" title="Bombas de concreto" />
                            </div>
                            <h3>Bombas & AutoBombas</h3>
                            <p>Contamos con Autobombas con brazos de 35 - 38 y 45 metros de longitud, en excelente estado de funcionamiento y con operarios profesionales expertos.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="Imagenes/circle3.png" alt="icono de calendario, contiene las opciones de cotizacion y separar bomba" title="Calendario">
                            </div>
                            <h3>Separe & Cotice</h3>
                            <p>Genere una cotización y si es su precio ideal separe una fecha para adquirir nuestros productos o servicios, en todo Colombia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service section end -->
        <!-- Portfolio section start -->
        <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1 title="Portafolio de productos y servicios">¿Con que contamos?</h1>
                    <p>Aquí les presentamos nuestro portafolio de productos y servicios especializados para su obra.</p>
                </div>
                <ul class="nav nav-pills">
                    <li class="filter" data-filter="all" title="ver todo el contenido">
                        <a href="#noAction">Todo</a>
                    </li>
                    <li class="filter" data-filter="web" title="ver todo lo relacionado con concreto">
                        <a href="#noAction">Concreto</a>
                    </li>
                    <li class="filter" data-filter="photo" title="ver todo lo relacionado con las bombas">
                        <a href="#noAction">Bombas</a>
                    </li>
                    <li class="filter" data-filter="identity" title="ver todo lo relacionado con las autobombas">
                        <a href="#noAction">AutoBombas</a>
                    </li>
                </ul>
                <!-- Start details for portfolio project 1 -->
                <div id="single-project">
                    <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="<?php echo $row_concreto1['imagen']; ?>" alt="imagen del tipo del concreto numero 1, para ampliar la informacion hacer clic a la imagen" title="clic para ver la ficha tecnica" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3 title="nombre"><?php echo $row_concreto1['tituloProducto']; ?></h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel" title="clic aquí para cerrar ficha tecnica"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Nombre </span><?php echo $row_concreto1['NombreProducto']; ?></div>
                                    <div>
                                        <span>Precio</span> <?php echo $row_concreto1['PrecioProducto']; ?></div>
                                    <div>
                                        <span>cantidad</span> <?php echo $row_concreto1['ReferenciaProducto']; ?></div>
                                   
                                </div>
                                <p title="descripción"><?php echo $row_concreto1['DescripcionProducto']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 1 -->
                    <!-- Start details for portfolio project 2 -->
                    <div id="slidingDiv1" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="<?php echo $row_bomba1['ImagenBomba']; ?>" alt="imagen bomba 1, para ampliar la información hacer clic en la imagen" title="clic para ver la ficha tecnica">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><?php echo $row_bomba1['Titulo']; ?></h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Nombre</span> <?php echo $row_bomba1['Nombre']; ?></div>
                                    <div>
                                        <span>m3/h</span> <?php echo $row_bomba1['MetrosBombeables']; ?></div>
                                    <div>
                                        <span>Referencia</span> <?php echo $row_bomba1['ReferenciaBomba']; ?></div>
                                    <div>
                                        <span>Motor</span> <?php echo $row_bomba1['Motor']; ?></div>
                                </div>
                                <p title="Descripción"> <?php echo $row_bomba1['Descripcion']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 2 -->
                    <!-- Start details for portfolio project 3 -->
                    <div id="slidingDiv2" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="<?php echo $row_auto1['ImagenBomba']; ?>" alt="imagen de autobomba 3, para ver el contenido hacer clic en la imagen">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><?php echo $row_auto1['Titulo']; ?></h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Nombre</span>  <?php echo $row_auto1['Nombre']; ?></div>
                                    <div>
                                        <span>m3/h</span> <?php echo $row_auto1['MetrosBombeables']; ?></div>
                                    <div>
                                        <span>Referencia</span> <?php echo $row_auto1['ReferenciaBomba']; ?></div>
                                   
                              </div>
                                <p title="Descripción"><?php echo $row_auto1['Descripcion']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 3 -->
                    <!-- Start details for portfolio project 4 -->
                    <div id="slidingDiv3" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="<?php echo $row_concreto2['imagen']; ?>" alt="imagen concreto 2, para ver el contenido hacer clic en la imagen">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><?php echo $row_concreto2['tituloProducto']; ?></h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Nombre</span> <?php echo $row_concreto2['NombreProducto']; ?></div>
                                    <div>
                                        <span>Precio</span> <?php echo $row_concreto2['PrecioProducto']; ?></div>
                                    <div>
                                        <span>Cantidad</span> <?php echo $row_concreto2['ReferenciaProducto']; ?></div>                                  
                                </div>
                                <p title="Descripción"><?php echo $row_concreto2['DescripcionProducto']; ?> </p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 4 -->
                    <!-- Start details for portfolio project 5 -->
                    <div id="slidingDiv4" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="<?php echo $row_bomba2['ImagenBomba']; ?>" alt="imagen bomba 2, para ver el contenido hacer clic en la imagen">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><?php echo $row_bomba2['Titulo']; ?></h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Nombre</span> <?php echo $row_bomba2['Nombre']; ?></div>
                                    <div>
                                        <span>m3/h</span> <?php echo $row_bomba2['MetrosBombeables']; ?></div>
                                    <div>
                                        <span>Referencia</span>  <?php echo $row_bomba2['ReferenciaBomba']; ?></div>
                                    <div>
                                        <span>Motor</span> <?php echo $row_bomba2['Motor']; ?></div>
                                </div>
                                <p title="Descripción"><?php echo $row_bomba2['Descripcion']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 5 -->
                    <!-- Start details for portfolio project 6 -->
                    <div id="slidingDiv5" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="<?php echo $row_auto2['ImagenBomba']; ?>" alt="imagen autobomba 2, para ver el contenido hacer clic en la imagen">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><?php echo $row_auto2['Titulo']; ?></h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Nombre</span> <?php echo $row_auto2['Nombre']; ?></div>
                                    <div>
                                        <span> m3/h</span> <?php echo $row_auto2['MetrosBombeables']; ?></div>
                                    <div>
                                        <span>Referencia</span> <?php echo $row_auto2['ReferenciaBomba']; ?></div>                                    
                              </div>
                                <p title="Descripción"><?php echo $row_auto2['Descripcion']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 6 -->
                    <!-- Start details for portfolio project 7 -->
                    <div id="slidingDiv6" class="toggleDiv row-fluid single-project">
                        <div class="span6"><img src="<?php echo $row_producto3['imagen']; ?>"  alt="imagen concreto 3, para ver el contenido hacer clic en la imagen"></div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><?php echo $row_producto3['tituloProducto']; ?></h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Nombre</span> <?php echo $row_producto3['NombreProducto']; ?></div>
                                    <div>
                                        <span>Precio</span> <?php echo $row_producto3['PrecioProducto']; ?></div>
                                    <div>
                                        <span>Cantidad</span> <?php echo $row_producto3['ReferenciaProducto']; ?></div>                                   
                                </div>
                                <p title="Descripción"><?php echo $row_producto3['DescripcionProducto']; ?> </p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 7 -->
                    <!-- Start details for portfolio project 8 -->
                    <div id="slidingDiv7" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="<?php echo $row_bomba3['ImagenBomba']; ?>" alt="imagen bomba 3, para ver el contenido hacer clic en la imagen">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><?php echo $row_bomba3['Titulo']; ?></h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Nombre</span> <?php echo $row_bomba3['Nombre']; ?></div>
                                    <div>
                                        <span>m3/h</span> <?php echo $row_bomba3['MetrosBombeables']; ?></div>
                                    <div>
                                        <span>Referencia</span> <?php echo $row_bomba3['ReferenciaBomba']; ?></div>
                                    <div>
                                        <span>Motor</span> <?php echo $row_bomba3['Motor']; ?></div>
                                </div>
                                <p title="Descripción"><?php echo $row_bomba3['Descripcion']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 8 -->
                    <!-- Start details for portfolio project 9 -->
                    <div id="slidingDiv8" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="<?php echo $row_auto3['ImagenBomba']; ?>" alt="imagen autobomba 3, para ver el contenido hacer clic en la imagen">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><?php echo $row_auto3['Titulo']; ?></h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Nombre</span> <?php echo $row_auto3['Nombre']; ?></div>
                                    <div>
                                        <span>m3/h</span> <?php echo $row_auto3['MetrosBombeables']; ?></div>
                                    <div>
                                        <span>Referencia</span>  <?php echo $row_auto3['ReferenciaBomba']; ?></div>                                   
                              </div>
                                <p title="Descripción"><?php echo $row_auto3['Descripcion']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- End details for portfolio project 9 -->
                    <ul id="portfolio-grid" class="thumbnails row">
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="Imagenes/cemento.jpg" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                                    <i class="icon-plus" title="clic para ampliar información"></i>
                                </a>
                              <h3><?php echo $row_concreto1['tituloProducto']; ?></h3>
                                <p>Click para ver ficha tecnica</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="Imagenes/BOMBA AMARILLA.JPG" alt="project 1">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                                    <i class="icon-plus"></i>
                                </a>
                              <h3><?php echo $row_bomba1['Titulo']; ?></h3>
                                <p>Click para ver ficha tecnica</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="Imagenes/Autobomba5.jpg" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv2">
                                    <i class="icon-plus"></i>
                                </a>
                              <h3><?php echo $row_auto1['Titulo']; ?></h3>
                                <p>Click para ver ficha tecnica</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="Imagenes/concreto.jpg" alt="project 1">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv3">
                                    <i class="icon-plus"></i>
                                </a>
                              <h3><?php echo $row_concreto2['tituloProducto']; ?></h3>
                                <p>Click para ver ficha tecnica.</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="Imagenes/BOMBA AZUL.jpg" alt="project 1">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv4">
                                    <i class="icon-plus"></i>
                                </a>
                              <h3><?php echo $row_bomba2['Titulo']; ?></h3>
                                <p>Click para ver ficha tecnica</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="Imagenes/Naranja.jpg" alt="project 1">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv5">
                                    <i class="icon-plus"></i>
                                </a>
                              <h3><?php echo $row_auto2['Titulo']; ?></h3>
                                <p>Click para ver ficha tecnica</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="Imagenes/concreto3.jpg" alt="project 1" />
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv6">
                                    <i class="icon-plus"></i>
                                </a>
                              <h3><?php echo $row_producto3['tituloProducto']; ?></h3>
                                <p>Click para ver ficha tecnica</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="Imagenes/roja.jpg" alt="project 1">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                                    <i class="icon-plus"></i>
                                </a>
                              <h3><?php echo $row_bomba3['Titulo']; ?></h3>
                                <p>Click para ver ficha tecnica</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="Imagenes/autobombaAzul.jpg" alt="project 1">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv8">
                                    <i class="icon-plus"></i>
                                </a>
                              <h3><?php echo $row_auto3['Titulo']; ?></h3>
                                <p>Click para ver ficha tecnica</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Portfolio section end -->
        <!-- About us section start -->
        <div class="section primary-section" id="about">
            <div class="triangle"></div>
            <div class="container">
                <div class="title">
                    <h1>Empleados</h1>
                    <p>¿haces parte de la empresa? ¿de nuestra página? ¿quieres ser parte? este es tu espacio.</p>
                </div>
                <div class="row-fluid team">
                    <div class="span4" id="first-person">
                        <div class="thumbnail"> <a href="php/login.php"><img src="Imagenes/welcome.jpg" alt="team 1"></a>
                            <h3>vamos!</h3>
                            <ul class="social">
                                
                                <li>
                                  <a href="php/ingresoEmpleado.php">
                                        <span class="icon-user"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Ingresa</h2>
                                <p>Si ya estas registrado ingresa para ver las tareas del día, envos o consultas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="second-person">
                        <div class="thumbnail">
                          <img src="Imagenes/grupo.jpg" alt="team 1">
                            <h3>Crea!</h3>
                            <ul class="social">
                                <li>
                                  <a href="php/FormularioEmpleado.php">
                                        <span class="icon-users"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Registrar</h2>
                                <p>si ya eres empleado registra tus datos para crear tu usuario y empezar a descubrir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="third-person">
                        <div class="thumbnail">
                            <img src="Imagenes/join.jpg" alt="team 1">
                            <h3>Unete!</h3>
                            <ul class="social">
                               
                              <li>
                                    <a href="#contact">
                                        <span class="icon-award"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Trabaja con nosotros</h2>
                                <p>Si estas interesado en trabajar con esta gran empresa escribe un correo, déjanos conocerte.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>&nbsp;</h3>
            </div>
        </div>
        <!-- About us section end -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">La elegancia no es la abundancia de la simplicidad. Es la ausencia de complejidad.</p>
                
            </div>
        </div>
        <!-- Client section start -->
        <!-- Client section start -->
        <div id="clients">
            <div class="section primary-section">
                <div class="triangle"></div>
                <div class="container">
                    <div class="title">
                        <h1>Clientes</h1>
                        <p>Revisa tus transacciones, ingresa al aplicativo, o crea tu cuenta para empezar a conocer más!!.</p>
                     </div>
                <div class="row-fluid">
                    <div class="span4">
                        <div class="centered service">
                            <div class ="circle-border zoom-in">
                                <a href="php/ingresoCliente.php"><img class="img-circle" src="Imagenes/user.png" alt="service 1"  lowsrc="login.php" /></a>
                            </div>
                            <h3>Accede</h3>
                            <p>haz clic en la imagen para acceder a la información de tu cuenta.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in"> <a href="php/FormularioCliente.php"><img class="img-circle" src="Imagenes/adduser.png" alt="service 2" a href="FormularioCliente.php" /></a>
                            </div>
                            <h3>Crea</h3>
                            <p>haz clic en la imagen para crear tu cuenta y empezar a descubrir nuestros servicios.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in"> <a href="php/calendario/Agendados.php"><img class="img-circle" src="Imagenes/circle3.png" alt="service 3"></a>
                            </div>
                            <h3>Agenda</h3>
                            <p>haz clic en la imagen para acceder a la disponibilidad del calendario y separar tu servicio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price section start -->
        <div id="price" class="section secondary-section">
            <div class="container">
                <div class="title">
                    <h1>Precios</h1>
                    <p>Tenemos los mejores precios del mercado y una excelente calidad y certificación.</p>
                </div>
                <div class="centered">
                  <p class="price-text">Revisa nuestros precios dando clic en precios.</p>
                    <a href="php/lista2.php" class="button">Ver Precios</a>
                </div>
            </div>
        </div>
        <!-- Price section end -->
        <!-- Newsletter section start -->
        <div class="section third-section">
          <div class="container newsletter">
            <div class="sub-section">
              <div class="title clearfix">
                <div class="pull-left">
                  <h3>Exelencia y calidad del servicio día a día</h3>
                </div>
              </div>
            </div>
            <div id="success-subscribe" class="alert alert-success invisible"> <strong>Well done!</strong>You successfully subscribet to our newsletter.</div>
            <div class="row-fluid">
              <div class="span7">
                <div id="err-subscribe" class="error centered">Please provide valid email address.</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Newsletter section end -->
    <!-- Contact section start -->
        <div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1>Contáctenos</h1>
                        <p>Sigue nuestras novedades en las redes sociales. Póngase en contacto con nosotros si desea más información acerca de nuestros servicios</p>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.187289275196!2d-74.12689768568646!3d4.560317844129698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9f4d29a0f979%3A0x10c0aa62a4a032ff!2sCl.+52+Sur%2C+Bogot%C3%A1%2C+Colombia!5e0!3m2!1ses!2ses!4v1459428477901" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                 
                </div>
                 <div align="center"></div>
              <div class="container">
                    <div class="span9 center contact-info">
                        <p>CALLE 52 # 24 A 35 TORRE 17 OFICINA 452, BOGOTÁ, Colombia</p>
                        <p class="info-mail">servicios@concrebombasdecolombia.com</p>
                        <p>+57 1 7690083</p>
                        <p>321 3139816</p>
                        <div class="title">
                            <h3>Síguenos en nuestras redes sociales</h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section edn -->
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; PIERRE MAGIQUE Developers<br>
            SENA 2016</p>
        </div>
        <div class="footer">
        <p align="center"><a href="php/ingresoAdmin.php">Administración</a></p>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
<?php
mysql_free_result($concreto1);

mysql_free_result($bomba1);

mysql_free_result($auto1);

mysql_free_result($concreto2);

mysql_free_result($bomba2);

mysql_free_result($auto2);

mysql_free_result($producto3);

mysql_free_result($bomba3);

mysql_free_result($auto3);
?>
