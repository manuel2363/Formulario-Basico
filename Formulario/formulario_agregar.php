<?php
include("encabezado.html");
?>

		<!--<hgroup>
		   <center><h1>Formulario</h1></center>
		  <h2>For a living planet</h2>
		</hgroup>-->
		<div id="container">

<div id="cuerpo">
 <!--<div id="lateral">
    <!--Inicia
    Lateral Izquierdo
    Termina-->
 </div> <!--termina div lateral -->
 <div id="otrolado">
    <!--Empieza-->
    <img class="mediana" src="imagen/thOJZDW925.jpg">
    <!--Termina-->
 </div>
 <div id="principal">
    <!--Empieza-->
    <form name="form1" method="post" action="Action/insertar.php">
	   
	   <table align="center" width="30%"  border="0" cellspacing="1" cellpadding="2">
	   <tbody>
<tr>
				<td>
					<center>
						Nombre: 
					</center>
				</td>
				<td>
					<input autofocus  type="text" size="20" maxlength="50" required="required" placeholder="Ingrese Nombre" name="nombre">
					<span class="error">* <?php echo $firstnameErr;?></span>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Apellido: 
					</center>
				</td>
				<td>
					<input type="text" size="20" maxlength="50" required="required" placeholder="Ingrese Apellido" name="apelli">
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
			<tr>
				<td>
					<center>
						Fecha de Nacimiento: 
					</center>
				</td>
				<td>
				<input type="date" required="required" name="bdy">
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Edad: 
					</center>
				</td>
				<td>
				<input type="number" min="18" max="120" required="required" name="edad">
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Genero: 
					</center>
				</td>
				<td>
				<input type="radio" name="gener" value="Masculino">Masculino
				<input type="radio" name="gener" value="Femenino">Femenino
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Dirección: 
					</center>
				</td>
				<td>
				<input type="text" size="25" maxlength="100" required="required" placeholder="Dirección" name="direc">
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Telefono:
					</center>
				</td>
				<td>
				<input type="tel" placeholder="(xxxx) xxx-xxxx" name="usrtel">
				</td>
			</tr>
			<tr>
				<td>
					<center>
						E-mail:
					</center>
				</td>
				<td>
				<input type="email" placeholder="email@servidor.com" name="email">
				</td>
			</tr>
			<tr>
				<td>
					<center>
						Web:
					</center>
				</td>
				<td>
				<input type="url" name="homepage">
				</td>
			</tr>
			</tbody>
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