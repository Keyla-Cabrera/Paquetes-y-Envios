<?php
  //include 'conexion.php';

  $consulta=ConsultarPaquete($_GET['usr']);

  function ConsultarPaquete($id)
  {
    include 'conexion.php'; //Se necesita el include dentro de la funcion para que no de error al intentar conectar con la base de datos
    $query="SELECT * FROM paquete WHERE idPaquete='".$id."' ";
    $resultado= $conexion->query($query) or die ("Error al consultar paquete: ".mysqli_error($conexion) );

    $filas=$resultado->fetch_assoc();

    return [
      $filas['idPaquete'],
      $filas['descripcion'],
      $filas['peso'],
      $filas['idcasillero']
      
    ];

  }

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Modificar Paquete</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="bootstrap-fileinput-master/css/fileinput.css" rel="stylesheet" type="text/css">
<link href="bootstrap-fileinput-master/css/fileinput.min.css" rel="stylesheet" type="text/css">
<script src="bootstrap-fileinput-master/js/fileinput.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
   
  </div>
  
  <div id="contenido">
    <div style="margin: auto; width: 1000px; border-collapse: separate; border-spacing: 10px 5px;">
      <span> <h1>Modificar Alumno</h1> </span>
      <br>
    <form action="paquete_edit2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">


          <div>
            <div class="row">
              <div class="col-xs-3">
              <label>ID Paquete:</label>
              <input type="text" name="idPaquete" id="idPaquete" class="form-control" readonly="readonly" value="<?php echo $consulta[0]; ?>">
              </div>
          </div>

          <div>
            <div class="row">
              <div class="col-xs-3">
              <label>Descripcion:</label>
              <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $consulta[1]?>">
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Peso:</label>
              <input type="text" name="peso" id="peso" class="form-control" value="<?php echo $consulta[2]?>">
              </div>
            </div>


            <div class="row">
              <div class="col-xs-3">
              <label>Tipo casillero:</label>
              <select name="idcasillero" id="idcasillero" class="form-control">
                <option> <?php echo $consulta[3]; ?>  </option>
                <option>CASILLERO GRANDE</option>
                <option>CASILLERO MEDIANO</option>
                <option>CASILLERO PEQUEÑO</option>
              </select>
              </div>
            </div>

          

          </div>
          
          <br>
          <button type="submit" class="btn btn-success">Guardar</button>
         </form>
    </div>
    
  </div>
  
  <div id="footer">

    </div>

</div>


</body>
</html>

<script>
$("#file-1").fileinput({
showCaption: false,
browseClass: "btn btn-primary btn-lg",
fileType: "any"
});
</script>
