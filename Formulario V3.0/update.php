<?php
include("conexion.php");

$_POST['nacio'];
$_POST['cedul'];

$con = mysql_connect($host,$user,$password) or die("Problemas al conectar");

mysql_select_db($db,$con) or die("Problemas al conectar la base de datos");

$registro = mysql_query("SELECT * FROM usuario WHERE nacionalidad = '".$_POST[nacio]."' and cedula = '".$_POST[cedul]."'",$con) or die("Problemas en consulta: ".mysql_error());

while(list($nombre, $apellido, $nac, $cedula, $f_nac, $edad, $gen, $direccion, $telefono, $email, $pagina)=mysql_fetch_array($registro))
{
	echo"<form name='form1' method='post' action='update_1.php'><fieldset>";
	echo "<legend>Actualizar:</legend><table width='60%' align='center' border='1' cellspacing='1' cellpadding='2'>";
	echo "<tr><td><center>";
	echo "<label for='nombre'>Nombre:</label> <em>* </em> <input autofocus  type='text' size='20' maxlength='50' name='nombre' id='nombre' value='".$nombre."' readonly></center></td><td>";
	echo "<label for='nombrenuevo'>Nombre:</label> <em>* </em> <input autofocus  type='text' size='20' maxlength='50' name='nombrenuevo' id='nombrenuevo' required='required' placeholder='Ingrese Nombre'>";
	echo "</td></tr><tr><td><center>";
	echo "<label for='apelli'>Apellido:</label> <em>* </em> <input type='text' size='20' maxlength='50' name='apelli' id='apelli' value='".$apellido/*$reg['apelli']*/."' readonly></center></td><td>";
	echo "<label for='apellinuevo'>Apellido:</label> <em>* </em> <input type='text' size='20' maxlength='50' name='apelli' id='apellinuevo' required='required' placeholder='Ingrese Apellido'>";
	echo "</td></tr><tr><td><center>";
	echo "<label for='nacio'>Nacionalidad:</label> <em>* </em> ";
	if ($nac == "V"):
	echo "<input type='radio' name='nacio' id='nacio' value='V' checked>V-";
	echo "<input type='radio' name='nacio' id='nacio' value='E' disabled>E-";
	elseif ($nac == "E"):
	echo "<input type='radio' name='nacio' id='nacio' value='V' disabled>V-";
	echo "<input type='radio' name='nacio' id='nacio' value='E' checked>E-";
	endif;
	echo "</center></td><td>";
	echo "<label for='nacionueva'>Nacionalidad:</label> <em>* </em> <input type='radio' name='nacionueva' id='nacionueva' value='V'>V-";
	echo "<input type='radio' name='nacionueva' id='nacionueva' value='E'>E-";
	echo "</td></tr><tr><td><center>";
	echo "<label for='cedul'>Cedula:</label> <em>* </em> <input type='number' size='15' maxlength='15' name='cedul' id='cedul' value= '".$cedula."'readonly></center></td><td>";
	echo "<label for='cedulnueva'>Cedula:</label> <em>* </em> <input type='number' size='15' maxlength='15' name='cedulnueva' id='cedulnueva' required='required' placeholder='Ingrese Cedula'>";
	echo "</td></tr><tr><td><center>";
	echo "<label for='bdy'>Fecha de Nacimiento:</label> <em>* </em> <input type='date' name='bdy' id='bdy' value='".$f_nac."' readonly></center></td><td>";
	echo "<label for='bdynueva'>Fecha de Nacimiento:</label> <em>* </em> <input type='date' name='bdynueva' id='bdynueva' required='required'>";
	echo "</td></tr><tr><td><center>";
	echo "<label for='edad'>Edad:</label> <em>* </em><input type='number' min='18' max='120' name='edad' id='edad' value='".$edad."' readonly></center></td><td>";
	echo "<label for='edadnueva'>Edad:</label> <em>* </em><input type='number' min='18' max='120' name='edad' id='edadnueva' required='required' placeholder='Edad'>";
	echo "</td></tr><tr><td><center>";
	echo "<label for='gener'>Genero:</label> <em>* </em>";
	if ($gen == "Masculino"):
	echo "<input type='radio' name='gener' id='gener' value='Masculino' checked>Masculino";
	echo"<input type='radio' name='gener' id='gener' value='Femenino' disabled>Femenino";
	elseif ($gen == "Femenino"):
	echo "<input type='radio' name='gener' id='gener' value='Masculino' disabled>Masculino";
	echo"<input type='radio' name='gener' id='gener' value='Femenino' checked>Femenino";
	endif;
	echo "</center></td><td>";
	echo "<label for='genernuevo'>Genero:</label> <em>* </em><input type='radio' name='genernuevo' id='genernuevo' value='Masculino' >Masculino";
	echo "<input type='radio' name='genernuevo' id='genernuevo' value='Femenino' checked>Femenino";
	echo "</td></tr><tr><td><center>";
	echo "<label for='direc'>Dirección:</label>  <em>* </em><input type='text' size='25' maxlength='100' name='direc' id='direc' value='".$direccion."'readonly></center></td><td>";
	echo "<label for='direcnueva'>Dirección:</label>  <em>* </em><input type='text' size='25' maxlength='100' name='direcnueva' id='direcnueva' required='required' placeholder='Direccion'>";
	echo "</td></tr><tr><td><center>";
	echo "Telefono: </center></td><td>";
	echo "<input type='tel' name='usrtel' value='".$telefono."'readonly>";
	echo "</td></tr><tr><td><center>";
	echo "E-mail: </center></td><td>";
	echo "<input type='email' name='email' value='".$email."'readonly>";
	echo "</td></tr><tr><td><center>";
	echo "Web:</center></td><td>";
	echo "<input type='url' name='homepage' value= '".$pagina."'readonly></fieldset>";
	echo "</td></tr></table></br><center><input type='submit' value='Guardar'></center>";
}

//$registro = mysql_query("UPDATE usuario set nombre='".$_POST[nombre]."' WHERE nacionalidad = '".$_POST[nacio]."' and cedula = '".$_POST[cedul]."'",$con) or die("Problemas en consulta: ".mysql_error());
//echo "Actualizacion Correcta!";
?>