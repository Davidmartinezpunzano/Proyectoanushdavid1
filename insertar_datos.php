
<?php
$titulo=$_REQUEST['titulo'];
$fechaanu=$_REQUEST['fechaanuncio'];
$fecha=$_REQUEST['fecharobo'];
//$ubicacion=$_REQUEST['ubicacionrobo'];
//$descripcionrobo=$_REQUEST['descripcionrobo'];
//$marca=$_REQUEST['marca'];
//$modelo=$_REQUEST['modelo'];
$color=$_REQUEST['color'];
$antiguedad=$_REQUEST['antiguedad'];
//$descripcion=$_REQUEST['descripcion'];
$numserie=$_REQUEST['numerodeserie'];
$foto=$_REQUEST['foto'];

$compensacion=$_REQUEST['compensacion'];
$con=mysqli_connect("localhost","root","","bd_bicisrobadas");
$ubicacion=mysqli_real_escape_string($con, $_REQUEST['ubicacionrobo']);
$descripcionrobo=mysqli_real_escape_string($con, $_REQUEST['descripcionrobo']);
$marca=mysqli_real_escape_string($con, $_REQUEST['marca']);
$modelo=mysqli_real_escape_string($con, $_REQUEST['modelo']);
$descripcion=mysqli_real_escape_string($con, $_REQUEST['descripcion']);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"SELECT * FROM anunci");
mysqli_query($con,"INSERT INTO anunci (anu_marca,anu_model,anu_titol,anu_data_anunci,anu_data_robatori,anu_ubicacio_robatori,anu_descripcio_robatori,anu_color,anu_antiguitat,anu_descripcio,anu_foto,anu_compensacio,anu_numero_serie) 
VALUES ('$modelo','$marca','$titulo','$fechaanu','$fecha','$ubicacion','$descripcionrobo','$color','$antiguedad','$descripcion','$numserie','$foto','$compensacion')");

mysqli_close($con);
echo "Guardado con exito";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="busquedabicisrobadas2.php">
<input type="submit" value="Volver a pagina principal"><br><br>
</form>
<form action="busquedabicisrobadas3.php">
<input type="submit" value="Añadir mas datos"><br><br>
</form>
</body>
</html>
