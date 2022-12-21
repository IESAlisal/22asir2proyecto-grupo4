
<!doctype html>
<head>
<link rel="stylesheet" href="css/form.css">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />


<title>Trabaja con nosotros.</title>
</head>
<body>

<div class="login-page">
  
  <div class="form">
    <h1>ENVÍE SU CURRICULUM</h1>

    <p><b>Descarga nuestro curriculum y envíalo <a href="recursos/curriculum-vitae.docx" download="C.V">aquí</a></b></p>
<form name='formulario' id='formulario' method='post' action='mailto:ialvarezr03@educantabria.es' target='_self' enctype="multipart/form-data">
<p>Nombre <input type='text' name='Nombre' id='Nombre'></p>
<p>E-mail
<input type='text' name='email' id='email'>
</p>

<p>Adjuntar tú curriculum: <input type='file' name='archivo1' id='archivo1'></p>
<p>
<input type='submit' value='Enviar'>
</p>
</form>
    <a> <input type="button" value="Volver" onclick="window.location.href='index.php'"></a>
  </div>
</div>

</body>

</html>