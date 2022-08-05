<?php

	ModificarPaquete($_POST['idPaquete'], $_POST['descripcion'], $_POST['peso'], $_POST['idcasillero']);

	function ModificarPaquete($idPaquete, $descripcion, $peso,  $idcasillero )
	{
		include 'conexion.php';

		$sentecia="UPDATE paquete SET descripcion='".$descripcion."', peso='".$peso."', idcasillero='".$idcasillero."' WHERE idPaquete='".$idPaquete."' ";

		$conexion->query($sentecia) or die ("Error al actualizar datos de paquete: ".mysqli_error($conexion));

	}

	echo '<script>';
		echo 'alert("Datos actualizados con exito!!");';
		echo 'window.location.href="paquetes.php";';
	echo '</script>';
?>