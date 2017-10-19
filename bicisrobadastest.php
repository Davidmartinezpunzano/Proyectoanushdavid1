<?php
$servidor = "localhost";
$usuario = "root";
$contrasenha = "";
$bd = "bd_bicisrobadas";
$conexion =@mysqli_connect($servidor, $usuario, $contrasenha);
if (!$conexion) {
    die('<strong>No pudo conectarse:</strong> ' . mysqli_error());
}else{
//La siguiente linea no es necesaria, simplemente la pondremos ahora para poder observar que la conexión ha sido realizada
echo 'Conectado  satisfactoriamente al servidor <br />';
$q = "SELECT * FROM anunci";

			$consulta = mysqli_query($conexion, $q);

			if(mysqli_num_rows($consulta)>0){
				$num_productos = mysqli_num_rows($consulta);
				echo "mostrar $anu_id productos<br/><br/>";

				while($anuncio=mysqli_fetch_array($consulta)){
					echo "<div style='width: 200px; float: left; color: orange; background-color: yellow; margin-right: 10px; margin-bottom: 10px;'>";
					echo "ID: $anuncio[anu_id]<br/>";
					echo "Nombre: $anuncio[anu_titol]<br/><br/>";
					echo "</div>";
				}

			} else {
				echo "NO hay productos que mostrar";
			}
}


/*En esta linea seleccionaremos la BD con la que trabajaremos y le pasaremos como referencia la conexión al servidor.
Para saber si se conecto o no a la BD podríamos utilizar el IF de la misma forma que la utilizamos al momento de conectar al servidor, pero usaremos otra forma de comprobar eso usando die().
*/ 
?>
