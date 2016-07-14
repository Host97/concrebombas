  <?php
	function TrabajarBD($sql)
	{
		$link= mysql_connect('localhost', 'root', '') or die (mysql_error('No se pudo conectar a la base de datos'));
		mysql_select_db('concrebombas') or die (mysql_error());
		$retorna= mysql_query($sql, $link) or die (mysql_error());
		mysql_close($link);
		return $retorna;
	}
	
	

	//Consulta.
	function seleccionar($tabla, $array_campos, $condicion=1)
	{
		$campos= implode (',',$array_campos);
		$sql= "SELECT $campos FROM $tabla WHERE $condicion";
		$retorna= TrabajarBD($sql);
		return $retorna; 
	}
	
	//insertar 
	function Insertar($valores, $tabla, $campos)
	{
		$campos = implode (',', $array_campos);
		$valores= implode (',', $array_valores);
		$sql = "INSERT INTO $tabla ($campos) VALUES ('$valores')";
		return TrabajarBD($sql);
	}
	
	//modificar
	function Modificar($valores, $tabla, $campos)
	{
		$campos = implode (',', $array_campos);
		$valores= implode (',', $array_valores);
		$sql = "UPDATE $campos FROM $tabla WHERE $valores";
		$retornaM = TrabajarBD($sql);
		return $retornaM;
		
	}
	
	//eliminar
	function Eliminar($valores, $tabla, $campos)
	{
		$campos = implode (',', $array_campos);
		$valores= implode (',', $array_valores);
		$sql = "DELETE $campos FROM $tabla WHERE $valores";
		$retornaE = TrabajarBD($sql);
		return $retornaE;
	}
?>