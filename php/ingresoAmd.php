<!DOCTYPE html"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">

</style>
</head>


<?php

session_start();
$_SESSION['error_login'] = "";
$_POST['login']= "si";
$cadena=mysql_connect("localhost","root","");
mysql_select_db("concrebombas");

if ($_SESSION['error_login'] == "") 
	{
		$_SESSION['error_login'] = "Digite E-mail y Clave";
		echo "Digite E-mail y clave";
	}//FIN IF
	if ($_POST['login']=="si") //El valor “si” se envía a la misma página mediante un valor hidden de un formulario HTML
	{
		$Email=$_POST['Email']; //Recogemos usuario y contraseña
		$Password=$_POST['Password'];

			if (($Email=="") || ($Password=="")) //Error campos en blanco
          	{

				$_SESSION['error_login']="¡Datos en blanco!";
				$url_relativa = "ingresoEmpleado.php"; //La dirección de login para el header
				header ("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']). "/" .$url_relativa);
			}//fin if  

			else//Si no es en blanco comprobamos de nuestra base de datos
			{
				$sql = mysql_query("SELECT * FROM usuarios WHERE Email='$Email'");
				$row = mysql_fetch_array($sql);
					if($row>0)
					{
					if($row[1] == $Password && $row[2]==2 && $row[3]==1)
					{
						$_SESSION['Email'] = $Email;
						$_SESSION['Password'] = $row[1];
						$_SESSION['Permisos'] = $row[2];
						$_SESSION['activo'] = $row[3];
						$url_relativa = "Administracion.php"; //Si todo es valido dejo entrar
						header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/" .$url_relativa);

					}//FIN IF
					else//Si falla la contraseña, error			
					{
						$_SESSION['error_login']="¡Contraseña incorrecta!"; 
						$url_relativa="ingresoAdmin.php";
						header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/" .$url_relativa);
					}//FIN ELSE
			}//FIN ELSE PRINCIPAL
			else//Si falla el usuario, error
			{
				$_SESSION['error_login']="¡Usuario incorrecto!"; 
				$url_relativa="login1.php";
				header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/" . $url_relativa);
			}//fin else
			mysql_free_result($sql);
	}//FIN IF PRINCIPAL
			mysql_close();
	}//
		else
		{
			session_destroy(); // Y si falla todo borro la sesión
		}//FIN ELSE
		 
?>
 

<p align="center">&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>