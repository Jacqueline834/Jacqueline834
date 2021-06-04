<html>
<head>
  <title>ALUMNOS</title>
</head>
<body bgcolor="AFEEEE">

<?php   
   include 'conexionA.php';   
   
   $cta = $_POST['cuenta'];   
   $pass = $_POST['password'];
 
   $result = $conexion -> query("SELECT cuenta, pass FROM reg_usuarios WHERE cuenta='$cta' AND Pass='$pass'")
                or die("ERROR NO EXISTE EL USUARIO");

    if( ( $fila = $result->fetch_assoc() ) >  0)
      {
          session_start();
          $_SESSION['usuario_log'] = 'logeado';
          header("Location:menuA.php");
      }
     else 
      {
        echo "<CENTER><BR><BR><BR><H2>ACCESO NO AUTORIZADO</H2><BR><BR>";
	echo "<A HREF=index.html><--REGRESAR</A></CENTER>"; 
        exit();       
      }
?>

</body>
</html>