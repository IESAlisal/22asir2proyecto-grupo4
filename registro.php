<!doctype html>
<head>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/form.css">

<title>Regístrate en nuestra página.</title>
</head>
<body>
<h1>REGÍSTRATE</h1>

<div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="validaciones/valida_registro.php">
      Nombre <input type="text" placeholder="nombre" name="name" />
      Contraseña <input type="password" placeholder="Contraseña" name="key1"/>
      Repita la contraseña <input type="password" placeholder="Contraseña" name="key2"/>
      <input type="submit" value="Registrar" name="submit" />
    </form>
  <input type="button" value="Volver" onclick="window.location.href='login.php'">
  </div>
</div>
</body>

</html>