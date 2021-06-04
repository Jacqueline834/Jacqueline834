<?php
include "candado.php";
?>
<HTML>
<HEAD>
          <TITLE>SITIO DE UNA FRUTERIA</TITLE>
</HEAD>
<BODY BGCOLOR="PINK">
<CENTER>


<?PHP
include'conexionA.php';
$cnt=$_POST['cuentaUsuario'];
$nom=$_POST['nombreUsuario'];
$pat=$_POST['paternoUsuario'];
$mat=$_POST['maternoUsuario'];
$pass=$_POST['passwordUsuario'];

$conexion -> query("insert into reg_usuarios values('$cnt','$nom','$pat','$mat','$pass')")
              or die("ERROR AL INSERTAR LOS DATOS");

echo "DATOS CORRECTAMENTE INSERTADOS";

?>
<BR><br><A HREF="index.html">INICIO</A>
</CENTER                       
</BODY>
</HTML>