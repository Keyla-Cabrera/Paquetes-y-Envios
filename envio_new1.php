<?php
 

  include "conexion.php";


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>envio</title>
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
   
  </div>
  
  <div id="contenido">
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
       <span> <h1>Nuevo Envio</h1> </span>
      <br>

    <form action="envio_new2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
         
           <div>

          <div>
            <div class="row">
              <div class="col-xs-3">
              <label>Fecha Envio:</label>
              <input type="date" name="FechaEnvio" id="FechaEnvio" class="form-control" >
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Fecha Recibido:</label>
              <input type="date" name="FechaRecibido" id="FechaRecibido" class="form-control" >
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Tipo Casillero:</label>
              <select name="IdCasillero" id="IdCasillero" class="form-control">
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
