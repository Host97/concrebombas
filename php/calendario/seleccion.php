<select name="idproducto" style="background-color:#312c2b;color:white;font-color:#D2D2D2;">
    
  <option selected style="background-color:#312c2b;color:#D2D2D2;font-color:#D2D2D2;">--Seleccione bomba--</option>
    
  <?php
include('libreria.php');

$array_productos =  select('bombas', array('idBombas', 'ReferenciaBomba', 'Nombre', 'ImagenBomba', 'PrecioBomba'), '1 ORDER BY Nombre');

while ($producto = mysql_fetch_array($array_productos)){

echo "<option value='$producto[0]'style='background-color:#312c2b;color:yellow;font-color:yellow;'>$producto[2]</option>";

}

?>
    
  </select>
  
  
  <?php
  include('libreria.php');
  //$array_productos =  "select idBombas, ReferenciaBomba, Nombre, ImagenBomba, PrecioBomba from bombas ORDER BY Nombre";
  echo  "<select name='idproducto' style='background-color:#312c2b;color:white;font-color:#D2D2D2;'>
    
  <option selected style='background-color:#312c2b;color:#D2D2D2;font-color:#D2D2D2;'>--Seleccione bomba--</option>";


  while ($producto = mysql_fetch_array($array_productos)){

echo "<option value='$producto[0]'style='background-color:#312c2b;color:yellow;font-color:yellow;'>$producto[2]</option>";

}


echo"</select>";

  
  ?>