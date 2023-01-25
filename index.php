<?php
include 'validaciones/valida_login.php';
include "validaciones/no_sesion.php"

 ?>

<!doctype html>
<link rel="stylesheet" href="css/form.css">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<title>Página de inicio.</title>
</head>
<body>

<div class="form">
  <h1>Bienvendido a la aplicación de libros</h1>
  <div class="botones">
      <a class= "enlace" href="libros.php">Alta de Libros</a>
      <a class= "enlace" href="libros_actualizar.php">Actualizar Libros</a>
      <a class= "enlace" href="libros_borrar.php">Baja de Libros</a></br></br><br>
      <a class= "enlace" href="documentacion.php">Documentación para los socios de la Coop</a>
  </div>
<div class="boton">
  <form action="">
    <input type="button" id="text_n" value="<?php echo utf8_decode($nuser); ?>" onclick="window.location.href='validaciones/cerrar_sesion.php'">
  </form>
  
</div>
</div>


</body>
</html>