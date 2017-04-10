<!DOCTYPE html>
<html lang="es">
<head>
	
        <title>Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
    </head>
	
    <body>
<?php
include("conexion.php");

$nac = $_POST['nacio'];
$_POST['cedul'];
$gen = $reg['gener'];

$con = mysql_connect($host,$user,$password) or die("Problemas al conectar");

mysql_select_db($db,$con) or die("Problemas al conectar la base de datos");

$registro = mysql_query("SELECT * FROM usuario WHERE nacionalidad = '".$_POST[nacio]."' and cedula = '".$_POST[cedul]."'",$con) or die("Problemas en consulta: ".mysql_error());

while($reg=mysql_fetch_array($registro))
{
?>
	   <table width="30%" align="center" border="0" cellspacing="1" cellpadding="2">
<tr>
				<td>
					<center>
						Nombre: 
					</center>
				</td>
				<td>
					<input autofocus  type="text" size="20" maxlength="50" name="nombre" value=<?php echo $reg['nombre'] ?> readonly>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Apellido: 
					</center>
				</td>
				<td>
					<input type="text" size="20" maxlength="50" name="apelli" value=<?php echo $reg['apelli'] ?> readonly>
					<span class="error">* <?php echo $lastnameErr;?></span>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Nacionalidad:
					</center>
				</td>
				<td>
				<?php
				if ($nac == "V"):
				?>
				<input type="radio" name="nacio" value="V" checked>V-
				<?php
				elseif ($nac == "E"):
				?>
				<input type="radio" name="nacio" value="E" checked>E-
				<?php
				endif;
				?>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Cedula:
					</center>
				</td>
				<td>
				<input type="number" size="15" maxlength="15" name="cedul" value= <?php echo $reg['cedul'] ?> >
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Fecha de Nacimiento: 
					</center>
				</td>
				<td>
				<input type="date" name="bdy" value=<?php echo $reg['bdy']?> >
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Edad: 
					</center>
				</td>
				<td>
				<input type="number" min="18" max="120" name="edad" value=<?php echo $reg['edad']?> >
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Genero: 
					</center>
				</td>
				<td>
				<?php
				if ($gen == "Masculino"):
				?>
				<input type="radio" name="gener" value="Masculino" checked>Masculino
				<?php
				elseif ($gen == "Femenino"):
				?>
				<input type="radio" name="gener" value="Femenino" checked>Femenino
				<?php
				endif;
				?>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Dirección: 
					</center>
				</td>
				<td>
				<input type="text" size="25" maxlength="100" name="direc" value=<?php echo $reg['direc']?> >
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Telefono:
					</center>
				</td>
				<td>
				<input type="tel" name="usrtel" value=<?php echo $reg['usrtel']?>>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						E-mail:
					</center>
				</td>
				<td>
				<input type="email" name="email" value=<?php echo $reg['email']?>>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Web:
					</center>
				</td>
				<td>
				<input type="url" name="homepage" value=<?php echo $reg['homepage']?>>
				</td>
			</tr>
		</table>
<?php
}
?>

</body>
</html>