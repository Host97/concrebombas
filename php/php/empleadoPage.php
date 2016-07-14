<?php require_once('../Connections/conexion.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "../index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
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

$var_id_consulta_nombre = "0";
if (isset($_GET['recordID'])) {
  $var_id_consulta_nombre = $_GET['recordID'];
}
mysql_select_db($database_conexion, $conexion);
$query_consulta_nombre = sprintf("SELECT * FROM empleado WHERE empleado.Email=%s", GetSQLValueString($var_id_consulta_nombre, "text"));
$consulta_nombre = mysql_query($query_consulta_nombre, $conexion) or die(mysql_error());
$row_consulta_nombre = mysql_fetch_assoc($consulta_nombre);
$totalRows_consulta_nombre = mysql_num_rows($consulta_nombre);
?>
<!DOCTYPE html>

<html lang="es">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Concrebombas</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/pluton.css" />
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
        <link rel="shortcut icon" href="../images/ico/favicon.ico.bmp">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img  src="../Imagenes/LOGONAME.png" />
                        <!-- This is website logo -->
                    Wellcome <?php echo $row_consulta_nombre['Cargo']; ?> <?php echo $row_consulta_nombre['Nombre']; ?> <?php echo $row_consulta_nombre['Apellido']; ?></a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="<?php echo $logoutAction ?>">Cerrar Sesion</a></li>
                          <li><a href="#price">Precio</a></li>
                            <li><a href="#contact">Reportes</a></li>
                           
                           
                      </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- Start home section -->
        <div id="home">
            

        <!-- Price section start -->
        <div id="price" class="section secondary-section">
            <div class="container">
                <div class="title">
                    <h1>Precios</h1>
                    <p>Tenemos los mejores precios del mercado y una exelente calidad y certificación.</p>
                </div>
                <div class="centered">
                  <p class="price-text">Revisa nuestros precios dando clic en cotización.</p>
                    <a href="lista.php" class="button">Ver Listado</a>
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
                  <h3>Exelencia y calidad del servicio dia a dia</h3>
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
                        <h1>Gestion de Servicio</h1>
                        <p>Por favor envie sus reportes completamente diligenciados haciendo clic en el botón</p>
                        <p>&nbsp;</p>
                        <div class="centered">
                  
                    <a href="GestionServicio.php" class="button">Generar Reporte</a>
                </div>
                    </div>
                </div>
                <div class="container">
                    <div class="span9 center contact-info">
                        <p>&nbsp;</p>
                        <div class="title">
                          <h3>Siguenos en nuestras redes sociales</h3>
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
mysql_free_result($consulta_nombre);
?>
