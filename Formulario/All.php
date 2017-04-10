<?php
include("encabezado.html");
include("Action/conexion.php");

$con = mysql_connect($host,$user,$password) or die("Problemas al conectar");

mysql_select_db($db,$con) or die("Problemas al conectar la base de datos");

$registro = mysql_query("SELECT * FROM usuario",$con) or die("Problemas en consulta: ".mysql_error());
?>
<table width='90%' align='center' border='1' cellspacing='1' cellpadding='2'>
<tr>
			<td>
			<?php echo"Nombre"; ?>
			</td>
			<td>
			<?php echo"Apellido"; ?>
			</td>
			<td>
			<?php echo"Nacionalidad Cedula"; ?>
			</td>
			<td>
			<?php echo"Fecha Nacimiento"; ?>
			</td>
			<td>
			<?php echo"Edad"; ?>
			</td>
			<td>
			<?php echo"Genero"; ?>
			</td>
			<td>
			<?php echo"Direccion"; ?>
			</td>
			<td>
			<?php echo"Telefono"; ?>
			</td>
			<td>
			<?php echo"Email"; ?>
			</td>
			<td>
			<?php echo"Pagina"; ?>
			</td>
		</tr>
<?php
while(list($nombre, $apellido, $nac, $cedula, $f_nac, $edad, $gen, $direccion, $telefono, $email, $pagina)=mysql_fetch_array($registro)):

?>
	
		<tr>
			<td>
			<?php echo"$nombre"; ?>
			</td>
			<td>
			<?php echo"$apellido"; ?>
			</td>
			<td>
			<?php echo"$nac"."- "."$cedula"; ?>
			</td>
			<td>
			<?php echo"$f_nac"; ?>
			</td>
			<td>
			<?php echo"$edad"; ?>
			</td>
			<td>
			<?php echo"$gen"; ?>
			</td>
			<td>
			<?php echo"$direccion"; ?>
			</td>
			<td>
			<?php echo"$telefono"; ?>
			</td>
			<td>
			<?php echo"$email"; ?>
			</td>
			<td>
			<?php echo"$pagina"; ?>
			</td>
		</tr>
		
<?php
	endwhile;
?>
</table>
<?php
	mysql_close($con);
	include("foot.html");
?>