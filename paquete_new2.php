<?php
	NuevoPaquete($_POST['descripcion'], $_POST['peso'], $_POST['idcasillero']);

	function NuevoPaquete($descripcion, $peso, $idcasillero )
	{
		include 'conexion.php';
		$sentencia="INSERT INTO paquete (descripcion, peso, idcasillero) VALUES ('".$descripcion."', '".$peso."', '".$idcasillero."')";
		$conexion->query($sentencia) or die ("Error al crear paquete: ".mysqli_error($conexion));



		echo '<script>';
			echo 'alert("Paquete creado exitosamente!!");';
			echo 'window.location.href="paquetes.php";';
		echo '</script>';

	}
?>

