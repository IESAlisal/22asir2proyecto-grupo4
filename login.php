
<!doctype html>

<head>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/form.css">

<title>Identifícate  en nuestra página.</title>

</head>
<body>


<div class="login-page">


  
  <div class="form">
    <?php echo "Tu dirección IP es: {$_SERVER['SERVER_ADDR']}"; ?>
    <h1>IDENTIFÍCATE</h1>
    <form class="login-formu" method="POST" action="validaciones/valida_login.php">
      <input type="text" placeholder="Usuario" name="user"/>
      <input type="password" placeholder="Contraseña" name="key"/>
      <input type="submit" value="Entrar" name="login" />
      <p class="mensage">¿No estás registrado? </p>
      <p><a href="registro.php">Crea una cuenta</a></p>
      <p class="mensage">* Antes de registrarte crea la base de datos.</p>
      <p><a href="validaciones/funciones_base_de_datos.php">Crea la base de datos</a></p>
    </form>
    <input type="submit" value="¿Quieres trabajar en nuestra escuela rural?, ¡ENTRA AQUí!" onclick="window.location.href='trabajo.php'"/>
  </div>
</div>

</body>

</html>