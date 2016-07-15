<?php

//en el caso de que la fecha sea mayor a la actual se permiten realizar agendamientos

$array_productos = "select `idBombas`, `ReferenciaBomba`, `Nombre`, `ImagenBomba`, `PrecioBomba` from `bombas` where 1 ORDER BY `Nombre`";
$query= mysql_query($array_productos);

if (count($eventos)>0 && in_array($compuesta,$eventos,true)) {echo " class=' evento";$noagregar=true;}
					else {echo " class='activa";$noagregar=false;}
					
					
					if ($hoy==$compuesta) echo " hoy";

if ($noagregar==false){ echo "'>$j<a href='javascript:mostrar(\"evento$j\")' title='Crear una reservación el ".fecha($compuesta)."' class='vtip'><img src='add.png' /></a><form id='evento$j' method='post' action='".$_SERVER["PHP_SELF"]."' style='display:none'>

<select name='titulo' id='titulo' alt='Lista deplegable' title='Lista desplegable con el nombre de las bombas' class='vtip' style='background-color:#312c2b;color:white;font-color:#D2D2D2;'><option value='--Seleccione bomba--' style='background-color:#312c2b;color:#D2D2D2;font-color:#D2D2D2;'>--Seleccione bomba--</option>";

while ($producto = mysql_fetch_array($query)){

echo "<option value='$producto[2]'style='background-color:#312c2b;color:yellow;font-color:yellow;'>$producto[2]</option>";

}
echo"<input type='submit' name='Enviar' alt='Boton que guarda la reservacion' value='Guardar' class='enviar'/><input type='hidden' name='guardarevento' value='Si' /><input type='hidden' name='fecha' value='$compuesta' /></form>";
}

					else{ echo "'>$j<a href='javascript:mostrar(\"evento$j\")' title='Agregar una reservación el ".fecha($compuesta)."' class='vtip'><img src='add.png' /></a><form id='evento$j' method='post' action='".$_SERVER["PHP_SELF"]."' style='display:none'>
					
					
					
<select name='titulos' id='titulos' alt='Lista deplegable' title='Lista desplegable con el nombre de las bombas' class='vtip'style='background-color:#312c2b;color:white;font-color:#D2D2D2;'><option value='--Seleccione bomba--' style='background-color:#312c2b;color:#D2D2D2;font-color:#D2D2D2;'>--Seleccione bomba--</option>";

while ($producto = mysql_fetch_array($query)){

echo "<option value='$producto[2]'style='background-color:#312c2b;color:yellow;font-color:yellow;'>$producto[2]</option>";

}		


echo"<input type='submit' name='Enviar' alt='Boton que guarda la reservacion' value='Guardar' class='enviar' /><input type='hidden' name='addevent' value='Si' /><input type='hidden' name='fechas' value='$compuesta' /></form>";
}




?> 
  