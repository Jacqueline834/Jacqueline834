<?php
include "candado.php";
?>
<html>
<head>
	<title>ALUMNOS</title>
</head>
<body bgcolor="#CCFFFF ">

<CENTER><H1>¡¡TU ACTUALIZACION EN LA BD FUE EXITOSA!! </H1>
<?php   
   include 'conexionA.php'; 
  
$control=$_POST['noControlA'];

$nom=$_POST['nombreA'];

$paterno=$_POST['apPaterno'];

$materno=$_POST['apMaterno'];

$car=$_POST['carrera'];

$cor=$_POST['correo'];

$cel=$_POST['celular'];

$tel=$_POST['telefono'];


   $conexion -> query("DELETE from alumno WHERE noControlA='$control' ")
   or die("ERROR AL ACTUALIZAR LOS DATOS");

   echo "<br><br<br><br>DATOS CORRECTAMENTE ELIMINADOS <br><br>";
?>
<BR><BR><A HREF="eliminarAlumno.php"><FONT SIZE="4" COLOR="#191970">ACTUALIZAR OTRO ALUMNO</FONT></A>
<BR><br><A HREF="menuA.php"><FONT SIZE="4" COLOR="#191970">INICIO</FONT></A>
		
</CENTER>
</body>
</html>