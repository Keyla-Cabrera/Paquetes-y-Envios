<?php
	

	include "conexion.php";


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>paquetes</title>
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
														<li ><a href="envios.php">Envio</a></li>
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
  			<th>Descripcion</th>
  			<th>Peso</th>
			<th>Tipo casillero</th>
  			<th></th>
  			<th> <a href="paquete_new1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>

      <?php
        $query="SELECT * FROM paquete";
        $resultado = $conexion->query($query) or die ("Error al consultar paquete: ".mysqli_error($conexion));
        while ($filas=$resultado->fetch_assoc())
        {

      ?>
			  <tr>
			  	 <td> <?php echo $filas['descripcion']?>  </td>
			     <td> <?php echo $filas['peso']?> </td>
				 <td> <?php echo $filas['idcasillero']?> </td>
			     <td>  <a href='paquete_edit1.php?usr=<?php echo $filas['idPaquete'] ?> '> <button type='button' class='btn btn-success'>Edotar</button> </a> </td>
			     <td> <a href='paquete_delete.php?usr= <?php echo $filas['idPaquete'] ?> '> <button type='button' class='btn btn-danger'>Eliminar</button></a> </td>
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
