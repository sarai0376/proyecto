<?php  

include('db.php');			//base de datos

$USUARIO=$_POST['usuario'];				//variables 
$PASSWORD=$_POST['contraseña'];


$consulta="SELECT* FORM Personal where usuario='$USUARIO' and password='$PASSWORD'";		//llamado base de datos y variables usuario y password
$resultado=mysqli_query($conexion,$consulta);								//variables de consulta

$filas=mysqli_num_rows($resultado);				//filas para el if

if($filas){										//if datos correctos
	header("location:home.html");

 }else {									//if datos erroneos
	include("index.html");
	<?
	<h1 class="bad">"Error en los datos enviados"</h1>
	<?php	
}
mysqli_free_result($resultado);					//resultado
mysqli_close($conexion);						//cerrar conexion base de datos