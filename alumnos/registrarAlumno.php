<?php
include "candado.php";
?>
<HTML>
<HEAD>
          <TITLE> ALUMNOS </TITLE>
</HEAD>
<BODY BGCOLOR="ff99ff">
<CENTER>
           <FONT SIZE="6" COLOR="BLACK" FACE="VERDANA">REGISTRO DE ALUMNOS</FONT>
           <BR><BR><BR>
           <FONT SIZE="5" COLOR="BLACK" FACE="CAMBRIA">
           <FORM ACTION="registrarAlumnoBD.php" METHOD="POST">

                          <LABEL FOR="noControlA">Numero de Control
                          <INPUT TYPE="TEXT" ID="noControlA" NAME="controlAlumno" REQUIRED PLACEHOLDER="inf del alumno" />
                          </LABEL>
                          <BR><BR>

                           <LABEL FOR="nombreA">Nombre
                           <INPUT TYPE="TEXT" ID="NombreA" NAME="nombreAlumno" REQUIRED PLACEHOLDER="inf del alumno" />
                           </LABEL>
                           <BR><BR>

                           <LABEL FOR="apPaterno">Ap.Paterno
                           <INPUT TYPE="TEXT" ID="apPaterno" NAME="aPaterno" REQUIRED PLACEHOLDER="inf del alumno" />
                           </LABEL>
                           <BR><BR>

                          <LABEL FOR="apMaterno">Ap.Materno
                          <INPUT TYPE="TEXT" ID="apMaterno" NAME="aMaterno" REQUIRED PLACEHOLDER="inf del alumno" />
                          </LABEL>
                          <BR><BR>

                           <LABEL FOR="carrera">Carrera 
                           <INPUT TYPE="TEXT" ID="carrera" NAME="carreraAlumno" REQUIRED PLACEHOLDER="inf del alumno" />
                           </LABEL>
                           <BR><BR>

                           <LABEL FOR="correo">Correo
                           <INPUT TYPE="TEXT" ID="correo" NAME="correoAlumno" REQUIRED PLACEHOLDER="inf del alumno" />
                           </LABEL>
                           <BR><BR>

                           <LABEL FOR="celular">Celular
                           <INPUT TYPE="NUMBER" ID="celular" NAME="celularAlumno" REQUIRED PLACEHOLDER="inf del alumno"/>
                           </LABEL>
                           <BR><BR>

                           <LABEL FOR="telefono">Telefono
                           <INPUT TYPE="NUMBER" ID="telefono" NAME="telefonoAlumno" REQUIRED PLACEHOLDER="inf del alumno"/>
                           </LABEL>
                           <BR><BR>

                           <INPUT TYPE="SUBMIT" VALUE="Registrar" NAME="registrar">
                           <INPUT TYPE="RESET" VALUE="Limpiar" NAME="limpiar">
         </FORM>
         </FONT>
<center><A HREF="menuA.php"><FONT SIZE="5" COLOR="#191970">INICIO</FONT></A>

</CENTER>
</BODY>
</HTML>