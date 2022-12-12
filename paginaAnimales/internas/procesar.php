<?php

	include("../dll/config.php");
	include("../dll/class_mysqli.php");
	$miconexion= new class_mysqli();
	$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
	//extract($_POST);

	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$fechaNacimiento=$_POST['fecha'];

	$sql="insert into personal values('','$nombres', '$apellidos', '$correo', '$telefono', '$direccion', '$fechaNacimiento')";
	$resSql=$miconexion->consulta($sql);



	// $nombres=$_POST['nombres'];
	// $apellidos=$_POST['apellidos'];
	// $direccion=$_POST['direccion'];
	// $correo=$_POST['correo'];
	// $cedula=$_POST['cedula'];

	// $sql="insert into postulacion values('','$nombres', '$apellidos','$direccion', '$correo', '$cedula')";
	// $resSql=$miconexion->consulta($sql); "insert into postulacion values('','$nombre','$apellido','$direccion','$correo', '$cedula')";
	// $resSql=$miconexion->consulta($sql);

	//$sql="delete from personal where id = 1";

	//$sql="update personal set nombres = 'Juan', apellidos = 'Sonora' where id = 2";

	//$resSql=mysqli_query($conexion, $sql);

	if($resSql){
		echo "Sus datos se registraron correctamente";
	}else{
		echo "ERROR";
	}


?>