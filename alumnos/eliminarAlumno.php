<?php
include "candado.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR ALUMNOS</title>
</head>
<body bgcolor="ff99ff">
<CENTER>
	<BR>
	<FONT SIZE="13" FACE="CAMBRIA">ELIMINAR ALUMNO</FONT>
	<BR><BR><BR><BR>

	<FORM ACTION="eliminarAlumno.php" METHOD="POST">
		<TABLE border="0">
		<tr>
		  <td>
		   <label for="noControlA">No.CONTROL
		   <input type="TEXT" name="noControlA" ID="noControlA" required placeholder="INTRODUCE 8 DIGITOS "/>
		   </label>
		   <button type="SUBMIT" name="buscar" value="Buscar">Buscar</button>
		   <button type="RESET">Limpiar</button>
		  </td>
		</tr>		
                </TABLE>			
	</FORM>
<?php
	
     error_reporting(E_ALL ^ E_NOTICE);

     $valorBoton =$_POST['buscar'];   
  if ($valorBoton == "Buscar")  

{
     include 'conexionA.php';

     $control = $_POST['noControlA'];

     $result = $conexion -> query ("SELECT * FROM alumno WHERE noControlA='$control'");   
  
     if (!($filas = $result->fetch_assoc()) > 0 )
	{
	    echo "<BR>¡ERROR! NO SE ENCUENTRO EL REGISTRO"; 
            print '<script language="JavaScript">'; 
            print 'alert("NO SE ENCUENTRA EL REGISTRO");'; 
	    print '</script>';                 
	}

           else
            {


     $result->free();
?>
        <BR><BR> <FONT SIZE="15" FACE="CAMBRIA">ELIMINAR DATOS DEL ALUMNO</FONT>
	<br>
       <br>
	<FORM ACTION="eliminarBD.php" METHOD="POST">
		<TABLE border="0">
			                <tr>
			                <td>
				        <label for="noControlA">Control</label>
					<input type="TEXT" name="noControlA" ID="noControlA" READONLY required VALUE="<?php echo $filas['noControlA'] ?>" />
					</td>
			                </tr>


				        <tr>
				        <td>
<BR>
					<label for="nombreA">Nombre</label>
					<input type="TEXT" name="nombreA" ID="nombreA" READONLY required VALUE="<?php echo $filas['nombreA'] ?>" />
                                        </td>
			                </tr>

                                        <tr>
				        <td>
<BR>
					<label for="apPaterno">aPaterno</label>
					<input type="TEXT" name="apPaterno" ID="apPaterno" READONLY required VALUE="<?php echo $filas['apPaterno'] ?>" />
					</td>
			                </tr>

                                        <tr>
				        <td>
<BR>
					<label for="apMaterno">aMaterno</label>
					<input type="TEXT" name="apMaterno" ID="apMaterno" READONLY required VALUE="<?php echo $filas['apMaterno'] ?>" />
					</td>
			                </tr>

                                        <tr>
				        <td>
<BR>
					<label for="carrera">Carrera</label>
					<input type="TEXT" name="carrera" ID="carrera" READONLY  required VALUE="<?php echo $filas['carrera'] ?>" />
					</td>
			                </tr>

                                        <tr>
				        <td>
<BR>
					<label for="correo">Correo</label>
					<input type="TEXT" name="correo" ID="correo" READONLY required VALUE="<?php echo $filas['correo'] ?>" />
					</td>
			                </tr>

                                        <tr>
				        <td>
<BR>
					<label for="celular">Celular</label>
					<input type="NUMBER" name="celular" ID="celular" READONLY required VALUE="<?php echo $filas['celular'] ?>" />
					</td>
			                </tr>

				        <tr>
				        <td>
<BR>
					<label for="telefono">Telefono</label>
					<input type="NUMBER" name="telefono" ID="telefono" READONLY required VALUE="<?php echo $filas['telefono'] ?>"/>
					<br><br>
					</td>
			                </tr>

				</tr>

				<tr>
				<td>
				<CENTER><button type="SUBMIT">ELIMINAR</button>				
				<button type="RESET">LIMPIAR</button></CENTER>
				<br>
				</td>
			</tr>

			<br><br>
			<tr>
			<td></center>
                 </tr>			
		</TABLE>		
	</FORM>
<?php
}
}
?>
<br><BR><A HREF="menuA.php"><FONT SIZE="5" COLOR="#191970">INICIO</FONT></A>

</CENTER>
</body>
</html>