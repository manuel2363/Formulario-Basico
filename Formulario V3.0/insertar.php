<?php

include('conexion.php');

$_POST['nombre'];
$_POST['apelli'];
$_POST['nacio'];
$_POST['cedul'];
$_POST['bdy'];
$_POST['edad'];
$_POST['gener'];
$_POST['direc'];
$_POST['usrtel'];
$_POST['email'];
$_POST['homepage'];

if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['apelli']) && !empty($_POST['apelli']))
{
$con = mysql_connect($host,$user,$password) or die("Problemas al conectar");
mysql_select_db($db,$con) or die("Problemas al conectar la base de datos");

mysql_query("INSERT INTO usuario values('$_POST[nombre]','$_POST[apelli]','$_POST[nacio]','$_POST[cedul]','$_POST[bdy]','$_POST[edad]','$_POST[gener]','$_POST[direc]','$_POST[usrtel]','$_POST[email]','$_POST[homepage]')",$con);
echo "Datos ingresados"."</br>";

}
else
{
echo "Problema al insertar datos."."</br>";
}

/*
$nombre = $_POST['firstname'];
$apellido = $_POST['apelli'];
$sexo = $_POST['gener'];
$fecha_nac = $_POST['bdy'];

echo $nombre." ".$apellido."</br>";
//echo $apellido;
echo $sexo."</br>";
echo $fecha_nac;*/
/*define("Saludo","Hola, Como estas?");
define("numero", 20);
echo Saludo.numero;
$numero = 50;
echo $numero;
$texto = "</br> Esto es un texto";
echo $texto;
$boolean = true;
echo $boolean;
//echo "</br>Hola";
echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My name is manuel";*/

?>