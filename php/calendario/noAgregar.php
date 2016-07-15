<?php

//en caso tal de que sea una fecha anterior a la actual se bloquean las casillas para no permitir agendamientos nuevos

if (count($eventos)>0 && in_array($compuesta,$eventos,true)) {echo " class=' evento";$noagregar=true;}
					else {echo " class='anterior";$noagregar=false;}
					
					
					if ($hoy==$compuesta) echo " hoy";

if ($noagregar==false) echo "'>$j<form id='evento$j' method='post' onsubmit='return validar_Lista()' action='".$_SERVER["PHP_SELF"]."' style='display:none'><input type='hidden' name='guardarevento' value='Si' /><input type='hidden' name='fecha' value='$compuesta' /></form>";
					else echo "'>$j<form id='evento$j' method='post' onsubmit='return validar_Lista()' action='".$_SERVER["PHP_SELF"]."' style='display:none'><input type='hidden' name='addevent' value='Si' /><input type='hidden' name='fechas' value='$compuesta' /></form>";
					
?>