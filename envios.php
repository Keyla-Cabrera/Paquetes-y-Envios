<?php
	

	include "conexion.php";


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Envios</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  <header>
				<!-- Menu -->
				<div class="rows">
	                <div class="col-md-6">
										<nav class="navbar  navbar-fixed-top " role="navigation">
												<ul class="nav nav-pills center-block">
														<li class="active"></li>
														<li ><a href="paquetes.php">Paquetes</a></li>
														<li ><a href="envios.php">Envios</a></li>
                                                        <li><a href="login.php">Cerrar Sesión</a></li>
	                        </ul>
	                    </nav>
	                </div>
	            </div>

	            <!-- Fin Menu -->


			</header>
  	
  </div>
  
  <div id="contenido">
    

  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>IdEnvio</th>
  			<th>FechaEnvio</th>
			<th>FechaRecibido</th>
  			<th>TipoCasillero</th>
  			<th></th>
  			<th> <a href="envio_new1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>

      <?php
        $query="SELECT * FROM envio";
        $resultado = $conexion->query($query) or die ("Error al consultar carreras: ".mysqli_error($conexion));
        while ($filas=$resultado->fetch_assoc())
        {

      ?>
			  <tr>
			  	 <td> <?php echo $filas['IdEnvio']?>  </td>
			     <td> <?php echo $filas['FechaEnvio']?> </td>
			     <td> <?php echo $filas['FechaRecibido']?> </td>
				 <td> <?php echo $filas['IdCasillero']?> </td>
			     <td>  <a href='envios_edit1.php?usr=<?php echo $filas['IdEnvio'] ?> '> <button type='button' class='btn btn-success'>Editar</button> </a> </td>
			     <td> <a href='envios_delete.php?usr= <?php echo $filas['IdEnvio'] ?> '> <button type='button' class='btn btn-danger'>Eliminar</button></a> </td>
			  </tr>
      <?php
        }
      ?>

  	</table>
  </div>
  
	<div id="footer">
  		
  	</div>

</div>


</body>
</html>
