<?php

	$model=$_REQUEST['modelo'];
	$ciudad=$_REQUEST['ciudad'];
	$marca=$_REQUEST['marca'];
	$color=$_REQUEST['color'];
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
		//$sql = "SELECT anu_id, anu_titol, anu_data_anunci, anu_data_robatori, anu_ubicacio_robatori, anu_descripcio_robatori, anu_marca, anu_model, anu_color, anu_antiguitat, anu_descripcio, anu_numero_serie, anu_foto, anu_compensacio  FROM anunci WHERE anu_marca = '$marca' and anu_model = '$model' and anu_ubicacio_robatori = '$ciudad' and anu_color = '$color'";
    $sql = "SELECT * FROM anunci WHERE anu_marca like '%$marca%' and anu_model like '%$model%' and anu_ubicacio_robatori like '%$ciudad%' and anu_color like '%$color%'";
				  
		


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
		if ($resultado->num_rows == 0) {
    	// ¡Oh, no ha filas! Unas veces es lo previsto, pero otras
    	// no. Nosotros decidimos. En este caso, ¿podría haber sido
    	// actor_id demasiado grande? 
    	echo "Lo sentimos. No se pudo encontrar una coincidencia con la marca $marca. Inténtelo de nuevo.";
    	exit;
}
		$totalFilas    =    mysqli_num_rows($resultado);
		echo "Resultados encontrados: $totalFilas";

		//echo "<table border='1'><tr><td>ID</td><td>Titulo</td><td>Fecha de anuncio</td><td>Fecha del robo</td><td>Ubicacion del robo</td><td>Descripcion del robo</td><td>Marca</td><td>Modelo</td><td>Color</td><td>Antigüedad de la bici</td><td>Descripcion</td><td>numero de serie</td><td>Foto</td><td>Compensacion</td>
         //</tr><tr>";
         //echo "</tr></table">;
         $contador=0;

         echo "<table border='1'>";
         for ($contador=0; $contador<=$totalFilas ; $contador++) { 
         	
         
	  while ($row = mysqli_fetch_row($resultado)){
	  			echo "<table border='1'><tr>";
                echo "<td><img src='$row[12]'></td><td><center> Id: $row[0] <br><br> Titulo del anuncio: $row[1] <br><br> Fecha del anuncio: $row[2] <br><br> Fecha del robo: $row[3] <br><br> Ubicacion del robo: $row[4] <br><br> Descripcion del robo: $row[5] <br><br> Marca: $row[6] <br> Modelo: $row[7] <br><br> Color: $row[8] <br><br> Antigüedad: $row[9] <br><br> Descripcion $row[10] <br><br> Numero de serie: $row[11] <br><br> Compensacion: $row[13]€ </center></td>";
              }
   
   echo "</tr></table>";
				echo "<br>";
				echo "<br>";
				}
			}

			


		