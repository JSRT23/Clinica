<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<body background="imagenes/Clinica">
    <div class="container "  >
        <form class="row g-3 shadow-lg p-3 mb-5 bg-body rounded m-5 p-3 " method="post">
            <div>
                <img src="imagenes/CM.png" alt="registro-personal" width="100" height="100" class="d-inline-block align-text-top rounded-5">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label" >Fecha</label>
              <input type="date" class="form-control" name="correo"  required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label" >identificacion</label>
              <input type="text" class="form-control"  name="identificacion"  required>
            </div>
            <div class="col-12">
              <label  class="form-label" >Usuario</label>
              <input type="text" class="form-control"  name="usuario"  required>
            </div>
          
            <div class="col-md-6">
              <label for="inputCity" class="form-label" >Hora</label>
              <input type="time" class="form-control" name="direccion"  required>
            </div>
           
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck " required>
                <label class="form-check-label" for="gridCheck">
                  Acepta terminos y condicciones
                </label>
              </div>
            </div>
            <div class="col-12">
            <button type="submit" name="enviar"class="btn btn-primary">Agendar</button>
           

            </div>
            <a href="../inici.php">volver</a>
          </form> 
          
          <?php
          include("validarcon.php");

          ?>

         

    </div>
    
   
    
</body>
</html>