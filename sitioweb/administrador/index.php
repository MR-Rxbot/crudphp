<!--Este script de php pregunta
si hay envio de metodo post redirecciona a cierta pagina-->
<?php
if($_POST){
    header('location:inicio.php')
}
?>

<!doctype html>
<html lang="es">
  <head>
    <title>administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
   
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            
            </div>  
            
            <div class="col-md-4">
                <br><br><br>
                <div class="card">
                    <div class="card-header text-center">
                        Login
                    </div>
                    <div class="card-body">

                        <form method="post">
                        <div class = "form-group">
                        <label>Usuario:</label><br>
                        <input type="text" class="form-control" name="usuario" placeholder="Escribe tu usuario">
                        </div>
                        
                        <div class="form-group">
                        <label>Contraseña:</label><br>
                        <input type="password" class="form-control" name="contraseña" placeholder="Escribe tu contraseña">
                        </div>
                        
                        <br>
                        <button type="submit" class="btn btn-primary">Ingresar al administrador</button>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
  </body>
</html>