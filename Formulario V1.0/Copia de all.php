<?php
include("conexion.php");

$_POST['nacio'];
$_POST['cedul'];

$con = mysql_connect($host,$user,$password) or die("Problemas al conectar");

mysql_select_db($db,$con) or die("Problemas al conectar la base de datos");

$registro = mysql_query("SELECT * FROM usuario",$con) or die("Problemas en consulta: ".mysql_error());

while(list($nombre, $apellido, $nac, $cedula, $f_nac, $edad, $gen, $direccion, $telefono, $email, $pagina)=mysql_fetch_array($registro)):

?>
	<table width='30%' align='center' border='0' cellspacing='1' cellpadding='2'>
		<tr>
			<td>
			<input autofocus  type='text' size='20' maxlength='50' name='nombre' value='<?php $nombre; ?>' readonly>
			</td>
		</tr>
		<tr>
			<td>
			<input type='text' size='20' maxlength='50' name='apelli' value='<?php $apellido; ?>' readonly>
			</td>
		</tr>
		<tr>
			<td>
			<?php if ($nac == "V"):?>
			<input type='radio' name='nacio' value='V' checked>V-
			<?php elseif ($nac == "E"):?>
			<input type='radio' name='nacio' value='E' checked>E-
			<?phpendif;?>
			</td>
		</tr>
		<tr>
			<td>
			<input type='number' size='15' maxlength='15' name='cedul' value= '<?php $cedula; ?>'readonly>
			</td>
		</tr>
		<tr>
			<td>
			<input type='date' name='bdy' value='<?php $f_nac; ?>' readonly>
			</td>
		</tr>
		<tr>
			<td>
			<input type='number' min='18' max='120' name='edad' value='<?php $edad; ?>' readonly>
			</td>
		</tr>
		<tr>
			<td>
			<?php if ($gen == "Masculino"):?>
			<input type='radio' name='gener' value='Masculino' checked>Masculino
			<?php elseif ($gen == "Femenino"):?>
			<input type='radio' name='gener' value='Femenino' checked>Femenino
			<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td>
			<input type='text' size='25' maxlength='100' name='direc' value='<?php $direccion; ?>'readonly>";
			</td>
		</tr>
		<tr>
			<td>
			<input type='tel' name='usrtel' value='<?php $telefono; ?>'readonly>
			</td>
		</tr>
		<tr>
			<td>
			<input type='email' name='email' value='<?php $email; ?>'readonly>
			</td>
		</tr>
		<tr>
			<td>
			<input type='url' name='homepage' value= '<?php $pagina; ?>'readonly>
			</td>
		</tr>
		</table>
<?php
	endwhile;
	mysql_close($con);
?>