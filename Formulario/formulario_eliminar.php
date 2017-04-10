<?php
include("encabezado.html");
?>
<div id="container">

<div id="cuerpo">
 <div id="lateral">
    <div>
    <!--Inicia-->
    Lateral Izquierdo
    <!--Termina-->
    </div>
 </div> <!--termina div lateral -->
 <div id="otrolado">
    <!--Empieza-->
    <img class="mediana" src="imagen/thG2BQY4IH.jpg">
    <!--Termina-->
 </div>
 <div id="principal">
    <!--Empieza-->
    <form name="form1" method="post" action="Action/Eliminar.php">
	   
	   <table width="30%" align="center" border="0" cellspacing="1" cellpadding="2">
			<tr>
				<td>
					<center>
						Nacionalidad:
					</center>
				</td>
				<td>
				<input type="radio" name="nacio" value="V">V-
				<input type="radio" name="nacio" value="E">E-
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Cedula:
					</center>
				</td>
				<td>
				<input type="number" size="15" maxlength="15" required="required" placeholder="Cedula" name="cedul">
				</td>
			</tr>
		</table>
</br>
	   <center><input type="submit" value="Enviar"></center>
    <!--Termina-->
</div><!--Termina div principal-->
</div><!--Termina div cuerpo-->
    
</div>
<?php
include("foot.html");
?>
