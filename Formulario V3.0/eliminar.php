<?php

include("conexion.php");

$con = mysql_connect($host,$user,$password) or die("Problemas al conectar");

mysql_select_db($db,$con) or die("Problemas al conectar la base de datos");

$reg=mysql_query("select * from usuario where nacionalidad = '".$_POST[nacio]."' and cedula = '".$_POST[cedul]."';",$con);
if($re=mysql_fetch_array($reg))
{
mysql_query("delete from usuario where nacionalidad = '".$_POST[nacio]."' and cedula = '".$_POST[cedul]."';",$con);
echo "Datos Eliminados";
}else{
echo "Datos no han sido eliminados";
}
?>