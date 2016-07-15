<?php

if($rowevent['Email']==$correo)
						{
						echo "<p>$rowevent[descripcion]<a href='".$_SERVER["PHP_SELF"]."?borrarevento=".$rowevent["id"]."' onClick=\"return confirm('&iquest;Confirmas la eliminaci&oacute;n de la reservación?')\" alt='Boton para eliminar reservación' title='Eliminar esta reservación del ".fecha($compuesta)."' class='vtip'><img src='delete.png' /></a></p>";
						}
						else
						{
							echo "<p>$rowevent[descripcion]</p>";
						}
				
?>