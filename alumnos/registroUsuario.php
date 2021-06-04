<HTML>
<HEAD>
          <TITLE>registro</TITLE>
</HEAD>
<BODY BGCOLOR="FFF8DC">
<CENTER>
           <FONT SIZE="8" COLOR="BLACK" FACE="VERDANA">&#9792 &#9794 REGISTRO DE USUARIOS &#9792 &#9794</FONT>
           <BR><BR><BR>
           <FONT SIZE="5" COLOR="FF3300" FACE="CAMBRIA">
           <FORM ACTION="registrarUsuarioBD.php" METHOD="POST">

                          <LABEL FOR="cuenta">Cuenta
                          <INPUT TYPE="text" ID="cuenta" NAME="cuentaUsuario"  PLACEHOLDER="Introduce" />
                          </LABEL>
                          <BR><BR>

                           <LABEL FOR="nombre">Nombre
                           <INPUT TYPE="TEXT" ID="nombre" NAME="nombreUsuario"  PLACEHOLDER="Introduce" />
                           </LABEL>
                           <BR><BR>

                           <LABEL FOR="patreno">Paterno
                           <INPUT TYPE="TEXT" ID="paterno" NAME="paternoUsuario" PLACEHOLDER="Introduce" />
                           </LABEL>
                           <BR><BR>
 
                             <LABEL FOR="materno">Materno
                           <INPUT TYPE="TEXT" ID="materno" NAME="maternoUsuario"  PLACEHOLDER="Introduce" />
                           </LABEL>
                           <BR><BR>
 
                           <LABEL FOR="pass">Password
                           <INPUT TYPE="TEXT" ID="pass" NAME="passwordUsuario" PLACEHOLDER="Introduce"/>
                           </LABEL>
                           <BR><BR>

                           <INPUT TYPE="SUBMIT" VALUE="Registrar" NAME="registrar">
                           <INPUT TYPE="RESET" VALUE="Limpiar" NAME="limpiar">
         </FORM>
         </FONT>
<BR><A HREF="menuA.php"><FONT SIZE="5" COLOR="#191970">INICIO</FONT></A>
</CENTER>
</BODY>
</HTML>