<?php
include("conexion.php");

$_POST['nacio'];
$_POST['cedul'];

$con = mysql_connect($host,$user,$password) or die("Problemas al conectar");

mysql_select_db($db,$con) or die("Problemas al conectar la base de datos");

$registro = mysql_query("SELECT * FROM usuario WHERE nacionalidad = '".$_POST[nacio]."' and cedula = '".$_POST[cedul]."'",$con) or die("Problemas en consulta: ".mysql_error());

while(list($nombre, $apellido, $nac, $cedula, $f_nac, $edad, $gen, $direccion, $telefono, $email, $pagina)=mysql_fetch_array($registro))
{
	echo"<form name='form1' method='post' action='insertar.php'>";
	echo "<table width='30%' align='center' border='0' cellspacing='1' cellpadding='2'>";
	echo "<tr><td><center>";
	echo "Nombre: </center></td><td>";
	echo "<input autofocus  type='text' size='20' maxlength='50' name='nombre' value='".$nombre."' readonly>";
	echo "</td></tr><tr><td><center>";
	echo "Apellido: </center></td><td>";
	echo "<input type='text' size='20' maxlength='50' name='apelli' value='".$apellido/*$reg['apelli']*/."' readonly>";
	echo "</td></tr><tr><td><center>";
	echo "Nacionalidad: </center></td><td>";
	if ($nac == "V"):
	echo "<input type='radio' name='nacio' value='V' checked>V-";
	elseif ($nac == "E"):
	echo"<input type='radio' name='nacio' value='E' checked>E-";
	endif;
	echo "</td></tr><tr><td><center>";
	echo "Cedula: </center></td><td>";
	echo "<input type='number' size='15' maxlength='15' name='cedul' value= '".$cedula."'readonly>";
	echo "</td></tr><tr><td><center>";
	echo "Fecha de Nacimiento: </center></td><td>";
	echo "<input type='date' name='bdy' value='".$f_nac."' readonly>";
	echo "</td></tr><tr><td><center>";
	echo "Edad: </center></td><td>";
	echo "<input type='number' min='18' max='120' name='edad' value='".$edad."' readonly>";
	echo "</td></tr><tr><td><center>";
	echo "Genero: </center></td><td>";
	if ($gen == "Masculino"):
	echo "<input type='radio' name='gener' value='Masculino' checked>Masculino";
	echo"<input type='radio' name='gener' value='Femenino'>Femenino";
	elseif ($gen == "Femenino"):
	echo "<input type='radio' name='gener' value='Masculino' >Masculino";
	echo"<input type='radio' name='gener' value='Femenino' checked>Femenino";
	endif;
	echo "</td></tr><tr><td><center>";
	echo "Dirección: </center></td><td>";
	echo "<input type='text' size='25' maxlength='100' name='direc' value='".$direccion."'readonly>";
	echo "</td></tr><tr><td><center>";
	echo "Telefono: </center></td><td>";
	echo "<input type='tel' name='usrtel' value='".$telefono."'readonly>";
	echo "</td></tr><tr><td><center>";
	echo "E-mail: </center></td><td>";
	echo "<input type='email' name='email' value='".$email."'readonly>";
	echo "</td></tr><tr><td><center>";
	echo "Web:</center></td><td>";
	echo "<input type='url' name='homepage' value= '".$pagina."'readonly>";
	echo "</td></tr></table></br><center><input type='submit' value='Guardar'></center>";
}

$registro = mysql_query("UPDATE usuario set nombre='".$_POST[nombre]."' WHERE nacionalidad = '".$_POST[nacio]."' and cedula = '".$_POST[cedul]."'",$con) or die("Problemas en consulta: ".mysql_error());
echo "Actualizacion Correcta!";
?>