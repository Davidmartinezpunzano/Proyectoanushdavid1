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

		$sql = "SELECT anu_id, anu_titol, anu_data_anunci, anu_data_robatori, anu_ubicacio_robatori, anu_descripcio_robatori, anu_marca, anu_model, anu_color, anu_antiguitat, anu_descripcio, anu_numero_serie, anu_foto, anu_compensacio  FROM anunci WHERE anu_marca = '$marca'";

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

		echo "<table border='1'><tr><td>ID</td><td>Titulo</td><td>Fecha de anuncio</td><td>Fecha del robo</td><td>Ubicacion del robo</td><td>Descripcion del robo</td><td>Marca</td><td>Modelo</td><td>Color</td><td>Antigüedad de la bici</td><td>Descripcion</td><td>numero de serie</td><td>Foto</td><td>Compensacion</td>
         </tr><tr>";
	  while ($row = mysqli_fetch_row($resultado)){
                echo "<td>".$row[0]."</td><td>".$row[1]."</td>
              <td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td>".$row[11]."</td><td>".$row[12]."</td><td>".$row[13]."</td>";
   }
   echo "</tr></table>";
	
			}
			
		?>