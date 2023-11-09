<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login y Registro - Bienvenidos</title>
  <link rel="stylesheet" href="estilos.css">
  
</head>
<body>
  
   <main>

     <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
              <h3>¿Ya tienes una cuenta?</h3>
              <p>Inicia sesion para entrar a la pagina</p>
              <button id="btn__iniciar-sesion">Iniciar Sesion</button>
            </div>
            <div class="caja__trasera-register">
              <h3>¿Aún no tienes una cuenta?</h3>
              <p>Registrate para que puedas iniciar sesion</p>
              <button id="btn__registrarse">Registrarse</button>
            </div>
        </div>
        <!--Formulario de Login Register-->
        <div class="contenedor__login-register">
          <!--Login-->
          <form  class="formulario__login" action="validar.php" method="post">
           
            <h2>Iniciar sesion</h2>
            <input type="text" placeholder="usuario" name="usuario">
            <input type="password" placeholder="Contraseña"  name="contraseña">
            <button name="iniciarSession">Entrar</button>
           
           </form>
           <!--Registro-->
           <form action="index.php" method="POST" class="formulario__register">
            <h2>Registrarse</h2>
            <input type="text" placeholder="Nombre Completo" name = "nombre_completo">
            <input type="email" placeholder="Correo Electronico" name = "correo">
            <input type="text" placeholder="Usuario" name = "usuario">
            <input type="password" placeholder="Contraseña" name = "contraseña">
            <input type="text" placeholder="Direccion" name = "direccion">
            <input type="text" placeholder="Telefono" name = "telefono">
            <button name="register">Registrarse</button>
            <?php
          include("registro_usuario_be.php");
          

          ?>
           </form>
           
          
           
        
        </div>

     </div>
     <script src="script.js"></script>
   </main>
   
    
  
</body>
</html>