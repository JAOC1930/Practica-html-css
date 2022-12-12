<?php

	include("../dll/config.php");
	include("../dll/class_mysqli.php");
	$miconexion2= new class_mysqli();
	$miconexion2->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
	//extract($_POST);



    $nombre=$_POST['nombres'];
	$apellido=$_POST['apellidos'];
	$direccion=$_POST['direccion'];
    $correo=$_POST['correo'];
	$cedula=$_POST['cedula'];

	$sql="insert into postulacion values('','$nombre', '$apellido','$direccion', '$correo', '$cedula')";
	$resSql=$miconexion2->consulta($sql);

	//$sql="delete from personal where id = 1";

	//$sql="update personal set nombres = 'Juan', apellidos = 'Sonora' where id = 2";

	//$resSql=mysqli_query($conexion, $sql);

	if($resSql){
		echo "Sus datos se registraron correctamente";
	}else{
		echo "ERROR";
	}


?>