
<?php
        // Destruye la sesión actual y elimina la cookie de sesión
        session_start();
    session_destroy();
      // Verifica si existe una sesión activa, sino redirige a login.php
 if (isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit;
} else {
    header("Location: ../index.php");
    exit;
}

if (isset($_COOKIE['usuario'])) {
    unset($_COOKIE['usuario']);
    setcookie('usuario', '', time() - 3600, '/');
}


?>