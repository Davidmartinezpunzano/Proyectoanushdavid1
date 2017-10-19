<?php
	$model=$_REQUEST['modelo'];
	$ciudad=$_REQUEST['ciudad'];
	$marca=$_REQUEST['marca'];
	if (($marca=="")OR(!isset($marca))) {
		//header("Location: bicisrobadastest2.html");
	}else{

		//Creamos la conexion con la base de datos
		$mysqli = new mysqli("localhost", "root", "", "bd_bicisrobadas");
		$conexion=mysqli_connect("localhost", "root", "", "bd_bicisrobadas");
			if(!$conexion){
			    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
			    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
			    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
			    exit;
			} else {
		//La siguiente linea no es necesaria, simplemente la pondremos ahora para poder observar que la conexión ha sido realizada
		echo 'Conectado  satisfactoriamente al servidor <br />';
		}

		$acentos=mysqli_query($conexion, "SET NAMES 'utf8'");

		$sql = "SELECT anu_marca, anu_model, anu_ubicacio_robatori FROM anunci WHERE anu_marca = '$marca'";

		//$result = mysql_query ($sql);

		if (!$resultado = $mysqli->query($sql)) {
    	// ¡Oh, no! La consulta falló. 
   		echo "Lo sentimos, este sitio web está experimentando problemas.";

    	// De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
    	// cómo obtener información del error
    	echo "Error: La ejecución de la consulta falló debido a: \n";
    	echo "Query: " . $sql . "\n";
    	echo "Errno: " . $mysqli->errno . "\n";
    	echo "Error: " . $mysqli->error . "\n";
    	exit;
}
		if ($resultado->num_rows === 0) {
    	// ¡Oh, no ha filas! Unas veces es lo previsto, pero otras
    	// no. Nosotros decidimos. En este caso, ¿podría haber sido
    	// actor_id demasiado grande? 
    	echo "Lo sentimos. No se pudo encontrar una coincidencia para el ID $marca. Inténtelo de nuevo.";
    	exit;
}

		echo "<table border='1'><tr><td>Marca</td><td>Modelo</td><td>Ubicacion</td>
         </tr><tr>";
	  while ($row = mysql_fetch_row($resultado)){
                echo "<td>".$row[0]."</td><td>".$row[1]."</td>
              <td>".$row[2]."</td>";
   }
   echo "</tr></table>";
		/*if(mysqli_num_rows($resultados)>0){
					while($producto = mysqli_fetch_array($resultados)){
						echo "marca: $producto[anu_marca]<br/>";
						echo "model: $producto[anu_model]<br/>";
						echo "ciudad: $producto[anu_ciudad]<br/>";
						//echo "Precio: $producto[pro_precio]<br/><br/>";
					}
				} else {
					echo "No hay productos que mostrar";*/
		//$sql = "SELECT anu_marca, anu_model, anu_ubicacio_robatori FROM anunci ORDER BY rand() LIMIT 5";
		//$bici = $resultado->fetch_assoc();
		//echo "A veces veo a " . $bici['$marca'] . " " . $bici['$modelo'] . " en la TV.";

			}
			
		?>