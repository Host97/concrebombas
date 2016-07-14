<!DOCTYPE html>

<html lang="es"><!-- InstanceBegin template="/Templates/model.dwt.php" codeOutsideHTMLIsLocked="false" -->
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>Ingreso Cliente</title>
        <!-- InstanceEndEditable -->
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/pluton.css" />
        <link rel="stylesheet" type="text/css" href="file:///C|/xampp/htdocs/concrebombas/css/table.css"
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
        <!-- InstanceBeginEditable name="head" -->
        <!-- InstanceEndEditable -->
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container"><!-- InstanceBeginEditable name="name" --><a href="#" class="brand"> <img  src="../Imagenes/LOGONAME.png" />
                      <!-- This is website logo -->
                </a><!-- InstanceEndEditable --><!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation --><!-- InstanceBeginEditable name="menu" -->
                    <div class="nav-collapse collapse pull-right">
                      <ul class="nav" id="top-navigation">
                        <li class="active"><a href="../index.php">Pagina Principal</a></li>
                       
                      </ul>
                    </div>
                    <!-- InstanceEndEditable --><!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider --><!-- InstanceBeginEditable name="slider" --><!-- InstanceEndEditable --></div>
        <!-- End home section -->
        <!-- Service section start -->
        <div class="section primary-section" id="service">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1><!-- InstanceBeginEditable name="tittle1" -->Ingreso Cliente<!-- InstanceEndEditable --></h1>
                    <!-- Section's title goes here --><!-- InstanceBeginEditable name="text1" -->
                    <p>Estas a punto de ingresar a la pagina personal de cliente</p>
                    <p>Por favor digite su correo y contraseña</p>
                    <!-- InstanceEndEditable --><!--Simple description for section goes here. -->
                </div>
                <!-- InstanceBeginEditable name="EditRegion3" -->
               <form id="form1" name="form1" method="post" action="ingreso.php">
  <table>
   <div align="center">
   	  <?php
       if(isset($_SESSION['error_login'])){
                       session_destroy();
               echo $_SESSION['error_login'];
       }
	?>
     <p> </p>
     <h3 align="center"><strong>Usuario:
      <input type="text" name="Email" id="Email" />
     </strong></h3>
     <h3 align="center"><strong>Contraseña:</strong>
<input type="password" name="Password" id="Password" />
     </h3>
     <p>
      <p align="center">
      <button class="button button-sp" input type="submit" onClick="this.form.action = 'ingreso.php'" id="button" value="Ingresar">Ingresar</button>
    </p>
     </p>
   </div>
 
 <p align="center"> </p>
 </table>
</form>
        <!-- InstanceEndEditable -->
        <!-- Service section end -->
		<!-- InstanceBeginEditable name="EditRegion4" -->
        <!-- Portfolio section start -->
        <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
             <h1 align="center">&nbsp;</h1>
 <form name="form3" method="post" action="FormularioCliente.php">
   <h1 align="center"><strong><br>
   No estas registrado?</strong></h1>
   <p align="center">&nbsp;</p>
   <p align="center">
     <button class="button button-ps" input type="submit" onClick="this.form.action = 'FormularioCliente.php'" id="button3" value="Ingresar">Registrar Cliente</button>
   </p>

 </form>
        </div>
            <!-- InstanceEndEditable -->
        <!-- Portfolio section end -->
		<!-- InstanceBeginEditable name="EditRegion5" -->
		<p>&nbsp;</p>
		<p>&nbsp;</p>
        <div class="tittle"></div>
		<!-- InstanceEndEditable -->
        <!-- About us section end -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <!-- InstanceBeginEditable name="EditRegion7" -->
            <p>&nbsp;</p>
            <!-- InstanceEndEditable --></div>
        <!-- Client section start -->
        <!-- Client section start -->
		<!-- InstanceBeginEditable name="EditRegion8" -->
        <!-- InstanceEndEditable -->
        <!-- Price section start -->
		<!-- InstanceBeginEditable name="EditRegion9" -->
        <!-- Price section end -->
		<!-- InstanceEndEditable -->
        <!-- Newsletter section start -->
		<!-- InstanceBeginEditable name="EditRegion10" -->
		<!-- InstanceEndEditable -->
        <!-- Newsletter section end -->
		<!-- InstanceBeginEditable name="EditRegion11" -->
    	<!-- Contact section start -->
        <div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">
                  <div class="title">
                    <h1>Contactenos</h1>
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
        <!-- InstanceEndEditable -->
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
<!-- InstanceEnd --></html>