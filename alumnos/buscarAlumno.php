<?php
include "candado.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACTUALIZAR ALUMNOS</title>
</head>
<body bgcolor="##CCFFFF">
<CENTER>
	<BR>
	<FONT SIZE="13" FACE="CAMBRIA">BUSCAR ALUMNO</FONT>
	<BR><BR><BR><BR><BR>
	<FORM ACTION="actualizarAlumno.php" METHOD="POST">
		<TABLE border="0">
		<tr>
		  <td>
		   <label for="noControlA">No.CONTROL
		   <input type="TEXT" name="noControlA" ID="noControlA" required placeholder="INTRODUCE 8 DIGITOS "/>
		   </label>
		   <button type="SUBMIT">Buscar</button>
		   <button type="RESET">Limpiar</button>
		  </td>
		</tr>		
                </TABLE>			
	</FORM>
        <BR><BR><BR><BR><A HREF="menuA.php"><FONT SIZE="5" COLOR="#191970">INICIO</FONT></A>
</CENTER>
</body>
</html>