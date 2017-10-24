<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
	<title></title>
</head>
<body>
<div id="DIV_2">
	<div id="DIV_3">
		<div id="DIV_4">
			<ul id="UL_5">
				<li id="LI_6">
					<div id="DIV_7">
						<div id="DIV_8">
						</div>
						<div id="DIV_9">
							<div id="DIV_10">
							</div>
						</div>
					</div>
				</li>
				<li id="LI_11">
					 
					<label id="LABEL_12">
						Idioma:
					</label><span id="SPAN_13"></span>
					<div id="DIV_14">
						<div id="DIV_15">
							 <span id="SPAN_16">Español</span>
						</div>
						<div id="DIV_17">
							<div id="DIV_18">
								<!-- <a id="ctl16_rLanguages_lbLanguage_1" class="option-region selected" data-value="de" href="javascript:__doPostBack(&#39;ctl16$rLanguages$ctl01$lbLanguage&#39;,&#39;&#39;)">Español</a> -->
 <a id="A_19" href="javascript:__doPostBack('ctl16$rLanguages$ctl00$lbLanguage','')">Catalan</a>
							</div>
						</div>
					</div>
				</li>
				<li id="LI_20">
					<span id="SPAN_21"></span>
					<div id="DIV_22">
						<a href="#" id="A_23"></a><a href="https://www.facebook.com/bromptonjunctionbarcelona/info/?entry_point=page_nav_about_item&amp;tab=overview" id="A_24"></a><a href="https://www.instagram.com/bromptonjunctionbcn/" id="A_25"></a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- HEADER-->

	<div id="DIV_26">
		<div id="DIV_27">
			 <a id="A_28" href="https://www.bromptonjunctionbcn.com"><span id="SPAN_29"></span></a>
			<brompton id="BROMPTON_30">
			</brompton>
		</div>
	</div>
	<link rel="stylesheet" id="LINK_154" href="https://www.bromptonjunctionbcn.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=4.8.1" type="text/css" />
	
	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://www.bromptonjunctionbcn.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->

	<!--[if IE  8]><link rel="stylesheet" type="text/css" href="https://www.bromptonjunctionbcn.com/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]-->

	<style id="STYLE_156">.hero-centered.red:after,
.hero-centered.branding-red:after,
.branding-red .hero-centered:after {
  border-top-color: #cbdd61 !important;
}
		</style>
	<div id="DIV_157">
				<div id="DIV_158">
					<div id="DIV_159">
					</div>
					<h2 id="H2_160">
						Buscar Bicis Robadas
					</h2>
					<p id="P_161">
					</p>
				</div>
			</div>
	<form action="busquedabicisrobadas2.php" method="get">
		<br> <br>
  	Introducir marca: <input type="text" name="marca" required>
  	Introducir modelo: <input type="text" name="modelo" >
  	Introducir ciudad: <input type="text" name="ciudad" required>
  	Introducir color: <input type="text" name="color">
  <input type="submit" value="Enviar"><br><br>
</form>

<?php

	$model=$_REQUEST['modelo'];
	$ciudad=$_REQUEST['ciudad'];
	$marca=$_REQUEST['marca'];
	$color=$_REQUEST['color'];
	if (($marca=="")OR(!isset($marca))) {
		//header("Location: bicisrobadastest2.html");
	}else{

		//Creamos la conexion con la base de datos

		$conexion=mysqli_connect("localhost", "root", "", "bd_bicisrobadas");
			if(!$conexion){
			    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
			    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
			    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
			    exit;
			} else {
		//La siguiente linea no es necesaria, simplemente la pondremos ahora para poder observar que la conexión ha sido realizada
		//echo 'Conectado  satisfactoriamente al servidor <br />';
		}

		$acentos=mysqli_query($conexion, "SET NAMES 'utf8'");
		//$sql = "SELECT anu_id, anu_titol, anu_data_anunci, anu_data_robatori, anu_ubicacio_robatori, anu_descripcio_robatori, anu_marca, anu_model, anu_color, anu_antiguitat, anu_descripcio, anu_numero_serie, anu_foto, anu_compensacio  FROM anunci WHERE anu_marca = '$marca' and anu_model = '$model' and anu_ubicacio_robatori = '$ciudad' and anu_color = '$color'";
    $sql = "SELECT * FROM anunci WHERE anu_marca like '%$marca%' and anu_model like '%$model%' and anu_ubicacio_robatori like '%$ciudad%' and anu_color like '%$color%'";
    //echo $sql;
				  
		


		if (!$resultado = mysqli_query($conexion, $sql)) {
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

         $contador=0;

         echo "<table border='1'>";
         for ($contador=0; $contador<=$totalFilas ; $contador++) { 
         	
         
	  while ($row = mysqli_fetch_row($resultado)){
	  			echo "<table border='1'><tr>";
                echo "<td><img src='$row[12]'></td><td width='90%'><center> Id: $row[0] <br> Titulo del anuncio: $row[1] <br>Fecha del anuncio: $row[2] <br> Fecha del robo: $row[3]<br> Ubicacion del robo: $row[4] <br> Descripcion del robo: $row[5] <br> Marca: $row[6] <br> Modelo: $row[7] <br> Color: $row[8]<br> Antigüedad: $row[9]<br> Descripcion $row[10] <br> Numero de serie: $row[11] <br> Compensacion: $row[13]€<br> <a href='#'' class='button style1 big'>Volver al principio</a> </center></td>";
              }
   
   echo "</tr></table>";

				}
			}
?>
</body>
</html>