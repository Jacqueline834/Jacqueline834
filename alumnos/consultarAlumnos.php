<?php
include "candado.php";
?>

<?php
include "candado.php";
?>

<HTML>
<HEAD>

        <TITLE>TUTORIA</TITLE>
<HEAD>
<BODY BGCOLOR="#ff99ff">
                  <CENTER><FONT SIZE="10" FACE="CAMBRIA"><BR><BR>"ALUMNOS REGISTRADOS"<BR><BR></FONT>
                  <TABLE BORDER="4">
                 <TR>
                  <TD><LABEL>NO.CONTROL</LABEL></TD>
                  <TD><LABEL>NOMBRE</LABEL></TD>
                  <TD><LABEL>apPATERNO</LABEL></TD>
                  <TD><LABEL>apMATERNO</LABEL></TD>
                  <TD><LABEL>CARRERA</LABEL></TD>
                  <TD><LABEL>CORREO</LABEL></TD>
                  <TD><LABEL>CELULAR</LABEL></TD>
                  <TD><LABEL>TELEFONO</LABEL></TD>
                 </TR>
            <?PHP
            include "conexionA.php";
            $result = $conexion-> query ("SELECT * FROM ALUMNO") OR DIE ("NO SE LOGRO CARGAR LA CONSULTA ");
            
            while($fila=$result -> fetch_assoc())  
            {      
                 echo"<TR>
                        <TD>".$fila['noControlA']."</TD>
                        <TD>".$fila['nombreA']."</TD>
                        <TD>".$fila['apPaterno']."</TD>
                        <TD>".$fila['apMaterno']."</TD>
                        <TD>".$fila['carrera']."</TD>
                        <TD>".$fila['correo']."</TD>
                        <TD>".$fila['celular']."</TD>
                        <TD>".$fila['telefono']."</TD>
                       </TR>";
            }
                 
        ?>
        </TABLE>
       <BR><BR><BR><A HREF="menuA.php"><FONT SIZE="5" COLOR="#191970">INICIO</FONT></A>
</CENTER>
</BODY>
</HTML>