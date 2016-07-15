<?php include('security.php');?>
<?php require_once('../Connections/conexion.php'); ?>
<?php
if ($_SESSION['Permisos']!=1){ session_destroy(); header("Location: ../index.php");}
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

$var_id_persona = "0";
if (isset($_GET['recordID'])) {
  $var_id_persona = $_GET['recordID'];
}
mysql_select_db($database_conexion, $conexion);
$query_persona = sprintf("SELECT * FROM cliente WHERE cliente.Email=%s", GetSQLValueString($var_id_persona, "text"));
$persona = mysql_query($query_persona, $conexion) or die(mysql_error());
$row_persona = mysql_fetch_assoc($persona);
$totalRows_persona = mysql_num_rows($persona);

mysql_select_db($database_conexion, $conexion);
$query_productos = "SELECT * FROM productos WHERE productos.idproducto>0";
$productos = mysql_query($query_productos, $conexion) or die(mysql_error());
$row_productos = mysql_fetch_assoc($productos);
$totalRows_productos = mysql_num_rows($productos);
?>
<!DOCTYPE html>

<html lang="es">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina inicial <?php echo $row_persona['Apelativo']; ?>  <?php echo $row_persona['NombreCliente']; ?>   / Clientes - Concrebombas</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/pluton.css" />
        <link rel="stylesheet" type="text/css" href="../css/table.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="../css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="../css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="../images/ico/apple-touch-icon-144.png">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img  src="../Imagenes/LOGONAME.png" alt="Icono Empresarial:CONCREBOMBAS+BR"/>
                        <!-- This is website logo --> Wellcome <?php echo $row_persona['Apelativo']; ?> <?php echo $row_persona['NombreCliente']; ?>                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu" title="menú de Navegación"></i>
                  </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active" alt="Cierra sesión y vuelve a la página inicial" title="Cerrar y salir"><a href="close_session.php">Cerrar sesion</a></li>
                          <li title="Material Disponeble para compras"><a href="#purchases">Compras</a></li>
                            <li title="Calendario de disponibilidad"><a href="#renting">Alquiler</a></li>
                            <li title="conozca el total de sus compras y compare"><a href="#quotation">Cotizacion</a></li>
                            <li title="información de la empresa"><a href="#mailbox">Buzon</a></li>
                           
                      </ul>
                    </div>
                    <!-- End main navigation -->
              </div>
            </div>
        </div>
        <!-- Start home section -->
        <div id="home">
            
        </div>
        <!-- End home section -->
        <!-- Menu section start -->
        <div class="section primary-section" id="service">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1 title="menú de servicios">Mis Compras</h1>
                    <!-- Section's title goes here -->
                    <p>En esta sección revisa tus compras, o has unas nuevas.</p>
                    <!--Simple description for section goes here. -->
                </div>
                <div class="row-fluid">
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in"> <a href="#quotation"><img class="img-circle" src="../Imagenes/circle1.png" alt="icono Cotizacion, redirige a la cotización." title="ir a cotización"></a>
                            </div>
                            <h3>Cemento & Concreto</h3>
                            <p>Click aqui para realizar su cotización en linea.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in"> <a href="#purchases"><img class="img-circle" src="../Imagenes/circle2.png" alt="imagen de bombas, esta imagen redirige a la sección de ventas para revisar el material disponible." title="Revisar Productos" /></a>
                            </div>
                            <h3>Bombas & AutoBombas</h3>
                            <p>Click aqui para acceder a la galeria de productos y servicios.</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in"> <a href="#renting"><img class="img-circle" src="../Imagenes/circle3.png" alt="imagen de calendario, redirige a la sección de agendamiento" title=""></a>
                            </div>
                            <h3>Separe & Cotice</h3>
                            <p>Genere una cotización y si es su precio ideal separe una fecha para adquirir nuestros productos o servicios, Click en la imagen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu section end -->
        <!-- Purchases section start -->
        <div class="section secondary-section " id="purchases">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1>Galeria</h1>
                    <p>Aqui les presentamos nuestro portafolio de productos y servicios especializados para su obra.</p>
                </div>
                
            <!-- Start details for portfolio project 1 -->
            <table width="200%" border="1" align="center" class="table">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Ref/cant</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
              </tr>
              <?php do { ?>
              <tr>
                <td><?php echo $row_productos['idproducto']; ?></td>
                <td><?php echo $row_productos['NombreProducto']; ?></td>
                <td><?php echo $row_productos['ReferenciaProducto']; ?></td>
                <td><?php echo $row_productos['DescripcionProducto']; ?></td>
                <td><?php echo $row_productos['PrecioProducto']; ?></td>
              </tr>
                <?php } while ($row_productos = mysql_fetch_assoc($productos)); ?>
            </table>
            </div>
        </div>
        <!-- Purchases section end -->
        <!-- Renting section start -->
        <div class="section primary-section" id="renting">
            <div class="triangle"></div>
            <div class="container">
                <div class="title">
                    <h1 title="Sección para agendar servicios.">Agendamientos</h1>
                    <p>Revisa tus agendamientos, separa tu alquiler, elimina o modifica agendamientos previos.</p>
                </div>
                <div class="row-fluid team">
                  <div class="span4" id="previous">
                    <div class="thumbnail"> <a href="login.php"><img src="../Imagenes/agenda.jpg" alt="imagen decorativa agenda, busca el icono para ir al formulario de eliminación de agendamiento previo"></a>
                            <h3>Previos</h3>
                            <ul class="social">
                                
                                <li>
                                  <a href="calendario/eliminar.php">
                                        <span  class="icon-calendar" alt="al darle click redirige al formulario de eliminación de agendamientos previos" title="Revisa oelimina citas previas"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Revisa</h2>
                                <p>visualiza tus agendamientos previos, o elimina citas ya programados (24 horas de antelación).</p>
                            </div>
                      </div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                    <div class="span4" id="middle"></div>
                    <div class="span4" id="new">
                        <div class="thumbnail">
                            <img src="../Imagenes/agenda2.jpg" alt="imagen decorativa agenda, busca el icono para ir al formulario de asignación de agendamiento nuevo">
                            <h3>Nuevo</h3>
                            <ul class="social">
                               
                              <li>
                                    <a href="calendario/index.php">
                                        <span class="icon-calendar-empty" alt="al darle click redirige al formulario de asignación de agendamiento nuevo"></span>
                                    </a>
                              </li>
                            </ul>
                            <div class="mask">
                                <h2>Separa</h2>
                                <p>Separa el alquiler de bombas y/o autobombas, revisa la disponibilidad</p>
                            </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- Renting section end -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">No se trata de cultura pop, y no se trata de engañar a la gente ni convencerles de que quieren algo que no necesitan. Averiguamos lo que queremos. Y creo que somos bastante buenos pensando en lo que la gente va a querer también. Eso es por lo que nos pagan. Nosotros sólo queremos hacer grandes productos. -Jobs</p>
                
            </div>
        </div>
        <!-- Quotation section start -->
        <div id="quotation">
            <div class="section primary-section">
                <div class="triangle"></div>
              <div class="container">
                    <div class="title">
                        <h1 title="sección de cotización y carrito de consultas">Cotización</h1>
                        <p>revisa los productos y genera una cotización, ajusta presupuesto y toma la mejor decisión.</p>
                </div>
                <div class="contact">
                      <p align="center" class="price-text">Revisa nuestros precios dando click en cotización.</p>
                      <p align="center" class="price-text">&nbsp;</p>
                     
                </div>
         <div class="row-fluid team">
                  <div class="span4" id="previous">
                    <div class="button-service"> 
                           <a href="cotizacionBombas.php">
<input type="" class="button-service" ></a>
                            
            </div>
           </div>
                    <div class="span4" id="middle"></div>
                    
                    <div class="span4" id="new">
                    
                        <div class="button-products">
                           <a href="cotizacionProductos.php">
<input type="" class="button-products" ></a>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
        <!-- Quotation section end -->
        <!-- Newsletter section start -->
        <div class="section third-section">
          <div class="container newsletter">
            <div class="sub-section">
              <div class="title clearfix">
                <div class="pull-left">
                  <h3>Excelencia y calidad del servicio día a día</h3>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
    <!-- Newsletter section end -->
    <!-- Mailbox section start -->
        <div id="mailbox" class="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1 title="sección de información de contacto">Contactenos</h1>
                        <p>Sigue nuestras novedades en las redes sociales. Póngase en contacto con nosotros si desea más información acerca de nuestros servicios</p>
                    </div>
                </div>
                <div class="container">
                    <div class="span9 center contact-info">
                        <p>CALLE 52 # 24 A 35 TORRE 17 OFICINA 452, BOGOTÁ, Colombia</p>
                        <p class="info-mail">servicios@concrebombasdecolombia.com</p>
                        <p>+57 1 7690083</p>
                        <p>321 3139816</p>
                        <div class="title">
                            <h3>Siguenos en nuestras redes sociales</h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled" alt="Red Social Facebook" title="Facebook"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled" alt="Red Social Twitter" title="Twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled" alt="Red Social Linkedin" title="Linkedin"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-skype-circled" alt="Red Social skype" title="Skype"></span>
                                </a>
                            </li>                          
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled" alt="Red Social Google-plus" title="Google+"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mailbox section edn -->
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; PIERRE MAGIQUE Developers<br>
            SENA 2016</p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/modernizr.custom.js"></script>
        <script type="text/javascript" src="../js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="../js/jquery.cslider.js"></script>
        <script type="text/javascript" src="../js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="../js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="../js/app.js"></script>
    </body>
</html>
<?php
mysql_free_result($persona);

mysql_free_result($productos);
?>
