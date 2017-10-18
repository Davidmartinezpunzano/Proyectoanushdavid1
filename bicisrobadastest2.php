<?php

	$marca=$_REQUEST['marca'];
	if (($marca=="")OR(!isset($marca))) {
		//header("Location: bicisrobadastest2.html");
	}else{

		//Creamos la conexion con la base de datos
		$conexion=mysqli_connect("localhost:8080", "root", "", "bicisrobadas");

		//Seleccionamos qué tabla escogeremos (PRODUCTO), qué columnas elegimos (todas: *) y con qué filtro: nombre
		$j="SELECT * FROM anunci WHERE pro_marca LIKE '%$marca%'";

		//Hacemos la consulta a la BDD, con la dirección de la BDD y con qué queremos consultar
		$consulta = mysqli_query($conexion, $j);

		//Creamos la variable mysqli_num_rows para mostrar cuántos objetos coinciden con la búsqueda
		//$filas = mysqli_num_rows($consulta);

		//Mostramos el número de objetos
		//echo "$filas";

		//Mostramos los detalles del producto
		while($producto=mysqli_fetch_array($consulta)){
			echo "ID: $producto[pro_id]<br/>";
			echo "Nombre: $producto[pro_nombre] <br/>";
			echo "Descripción: $producto[pro_descripcion]<br/>";
			echo "Precio: $producto[pro_precio]€<br/>";
			echo "Categoria: $producto[pro_categoria]<br/><br>";
		}
	}


?>