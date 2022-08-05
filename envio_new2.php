<?php
	NuevoEnvio($_POST['FechaEnvio'], $_POST['FechaRecibido'], $_POST['IdCasillero']);

	function NuevoEnvio($FechaEnvio, $FechaRecibido, $IdCasillero )
	{
		include 'conexion.php';
		$sentencia="INSERT INTO envio (FechaEnvio, FechaRecibido, IdCasillero) VALUES ('".$FechaEnvio."', '".$FechaRecibido."',' ".$IdCasillero."' )";
		$conexion->query($sentencia) or die ("Error al crear envio: ".mysqli_error($conexion));



		echo '<script>';
			echo 'alert("Envio creado exitosamente!!");';
			echo 'window.location.href="envios.php";';
		echo '</script>';

	}
?>

