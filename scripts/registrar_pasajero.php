<?php
	include("conexion2.php");
	$identificacion = $_POST['identificacion'];
	$tipo_identificacion = $_POST['tipo_identificacion'];
	$nombre = $_POST['nombre'];
	$apellido_paterno = $_POST['apellido_paterno'];
	$apellido_materno = $_POST['apellido_materno'];
	$fecha_nacimiento = $_POST['fecha_nacimiento'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$pais = $_POST['pais'];
// probando si los valores llegaban	
//echo $identificacion.$tipo_identificacion.$nombre.$apellido_paterno.$apellido_materno.$fecha_nacimiento.$email.$sexo.$pais;
	
	$consulta = " EXEC insertar_pasajero '{$identificacion}','{$tipo_identificacion}','{$nombre}','{$apellido_paterno}','{$fecha_nacimiento}','{$email}','{$sexo}','{$pais}'";
	echo '<br>';
	echo $consulta;

	$resultado=sqlsrv_query($conexion,$consulta) or 
				die('No se pudo ejecutar la consulta');
	header("Location: ../reservas.php");
?>