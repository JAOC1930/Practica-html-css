<?php

	include("../dll/conexion.php");
	//extract($_POST);

	$idpersonal=$_POST['idpersonal'];

	$sql="delete from personal where id = '$idpersonal'";

	$resSql=mysqli_query($conexion, $sql);
	if($resSql){
		echo '<script>alert("Sus datos se elimanaron correctamente"),</script>';
        echo "<script>localhost.href='../'<script>";
	}else{
		echo "ERROR";
	}


?>