<?php
	
	EliminarPaquete($_GET['usr']);

	function EliminarPaquete($id)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM paquete WHERE idPaquete='".$id."' ";
		$conexion->query($sentencia) or die ("Error al Eliminar paquete: ".mysqli_error());
	}

	echo '<script>';
		echo 'alert("Paquete Eliminada!!");';
		echo 'window.location.href="paquetes.php";';
	echo '</script>';
?>