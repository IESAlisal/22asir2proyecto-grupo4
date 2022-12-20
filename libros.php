<?php include "validaciones/no_sesion.php" ?>
<!doctype html>
<head>
<link rel="stylesheet" href="css/form.css">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />


<title>Inserción de libros.</title>
</head>
<body>


<div class="login-page">
  
  <div class="form">
    <h1>INSERTE LOS DATOS DEL LIBRO</h1>
    <form class="login-form" method="post" action="validaciones/inserta_libros.php">
      <p>Título.*</p> <input type="text" placeholder="Título" name="titulo_libro" />
      <p>Año de edición.*</p> <input type="text" placeholder="Año de edición" name="año_edi"/>
      <p>Precio.*</p> <input type="text" placeholder="Precio" name="precio"/>
      <p>Fecha de adqusición.*</p> <input type="text" placeholder="Fecha de adqusición - dd/mm/aaaa" name="fecha_adq"/>
      <p class="obli">* Todos los campos son obligatorios.</p>
      <input type="submit" value="Guardar datos" name="submit">
    </form>
    <a> <input type="button" value="Mostrar los libros guardados" onclick="window.location.href='libros_datos.php'"></a>
    <a> <input type="button" value="Volver" onclick="window.location.href='index.php'"></a>
  </div>
</div>

</body>

</html>