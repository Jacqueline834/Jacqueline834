<?php
include "candado.php";
?>
<HTML>
<HEAD>
          <TITLE>ALUMNOS</TITLE>
</HEAD>
<BODY BGCOLOR="#CCFFFF">
<CENTER>


<?PHP
include'conexionA.php';

$control=$_POST['controlAlumno'];
$nom=$_POST['nombreAlumno'];
$paterno=$_POST['aPaterno'];
$materno=$_POST['aMaterno'];
$carrera=$_POST['carreraAlumno'];
$correo=$_POST['correoAlumno'];
$cel=$_POST['celularAlumno'];
$tel=$_POST['telefonoAlumno'];

$conexion -> query("insert into alumno values('$control','$nom','$paterno','$materno','$carrera','$correo','$cel','$tel')")
              or die("ERROR AL REGISTRAR AL ALUMNO");

echo "DATOS CORRECTAMENTE INSERTADOS";

?>

</CENTER                       
</BODY>
</HTML>