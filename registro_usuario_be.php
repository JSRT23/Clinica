<?php

$conex = mysqli_connect("localhost", "root", "Juan.2003", "login_register_db");

if (isset($_POST['register'])) {
  if (strlen($_POST['nombre_completo']) >= 1 && strlen($_POST['correo']) >= 1) {
    $nombre_completo = trim($_POST['nombre_completo']);
    $correo = trim($_POST['correo']);
    $usuario = trim($_POST['usuario']);
    $contraseña= trim($_POST['contraseña']);
    $direccion= trim($_POST['direccion']);
    $telefono= date($_POST['telefono']);

    $consulta = "INSERT INTO usuarios( nombre_completo, correo, usuario, contraseña, dirreccion, telefono) VALUES ('$nombre_completo','$correo','$usuario','$contraseña','$direccion','$telefono')";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
      ?> 
      <h3 class="text-light">¡Te has inscripto correctamente!</h3>
     <?php
    } else {
      ?> 
      <h3 class="bad">¡Upsss algo salio mal!</h3>
      <?php
    }
  }   else {
      ?> 
      <h3 class="bad">¡Por favor complete los campos!</h3>
         <?php
  }
}


?>