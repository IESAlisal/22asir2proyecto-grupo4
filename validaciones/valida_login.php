<?php
//crear sesion
include 'conexion_db.php';
 session_start();
error_reporting(0);



$nuser="Desconectar el usuario ".ucfirst($_SESSION['usuario']);
$id = "SELECT * FROM logins WHERE usuario='$nuser'";


if (isset( $_POST['user'] ) && isset( $_POST['key'] ) ) {
    $name=$_POST['user'];
    $key1=$_POST['key'];
    $consulta = "SELECT * FROM logins WHERE usuario='$name' AND pass=md5('$key1')";
    $query = mysqli_query($conn, $consulta);
    $row = mysqli_fetch_array($query);
    if ($row['usuario'] == $name && $row['pass'] == md5($key1)) {
       $_SESSION['usuario'] = $name;
       setcookie("usuario", $name, time()+3600,"/");
       header("Location: ../index.php");
    } else {
       echo '<script>
               alert("Usuario o contraseña incorrectos")
               window.location = "../login.php"  
            </script>';
    }

  }

   ?>

    