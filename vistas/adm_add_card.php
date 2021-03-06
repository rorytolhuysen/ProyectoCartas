<?php 
session_start();
if (@!$_SESSION['Usuario']) {
	header ("location: http://localhost/cartas/vistas/mazo1.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Expires" CONTENT="0">
    <meta http-equiv="Cache-Control" CONTENT="no-cache">
    <meta http-equiv="Pragma" CONTENT="no-cache">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cartas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/estilos.css" />

</head>

<body>
    
    <!--**** BARRA DE NAVEGACIÓN ****--> 
    <div class="container">
    <?php include('../controlador/conectar_db.php') ?> 
    <?php include('../modelo/navbar.php') ?>   
    <h2>Ingrese carta</h2>
                
            <div class="container bg-light frm">
                <form id="registration_form" onsubmit= 'return agregarCarta()' method="post">
                        
                        <div class="form-group">
                          <label for="SerialCarta">Serial de Carta</label>
                          <input type="text" class="form-control" id="SerialCarta" required="SerialCarta" name="SerialCarta" placeholder="Ingrese serial de carta">
                        </div>
            
                        <div class="form-group">
                          <label for="NombreCarta">Nombre de Carta</label>
                          <input type="text" class="form-control" id="form_username" required="NombreCarta" name="NombreCarta" placeholder="Ingrese nombre de carta"><td><span class="error_form" id="username_error_message"></span>
                        </div>
                        
                        <div class="form-group">
                          <label for="Mazo">Mazo</label>
                          <input type="text" class="form-control" id="Mazo"  required="Mazo" name="Mazo" placeholder="Ingrese nombre mazo">
                        </div>
                        
                        <div class="form-group">
                            <label for="Edicion">Edición</label>
                            <input type="text" class="form-control" id="Edicion" required="Edicion" name="Edicion" placeholder="Ingrese edición">
                        </div>
                        
                        <div class="form-group">
                            <label for="EstadoCarta">Estado de Carta</label>
                            <input type="text" class="form-control" id="EstadoCarta" required="EstadoCarta" name="EstadoCarta" placeholder="Ingrese estado">
                        </div>
                        
                        <div class="form-group">
                            <label for="Stock">Stock</label>
                            <input type="text" class="form-control" id="Stock" required="Stock" name="Stock" placeholder="Ingrese cantidad">
                        </div>
                        
                        <div class="form-group">
                            <label for="Precio">Precio</label>
                            <input type="text" class="form-control" id="Precio" required="Precio" name="Precio" placeholder="Ingrese precio">
                        </div>
                        
                        <button type="submit" class="btn btn-dark">Registrar carta</button>
                        <button type="submit" class="btn btn-dark">Cancelar</button>
                </form>
            </div>
        </div>
            
        
        

       

    
    </div> 
    
    
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://localhost/cartas/js/app.js"></script>
</body>


</html>