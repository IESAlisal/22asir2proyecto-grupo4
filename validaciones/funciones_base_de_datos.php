<?php 

// Conectamos con la base de datos

$conexion = new mysqli("localhost", "root", "", "");
if (!$conexion) {
    echo "Fallo de conexión a MySQL: " . $conexion->connect_error;
}


$sql = 'CREATE DATABASE libros';
if (mysqli_query($conexion, $sql)) {
    echo '<script>alert("La base de datos libros se creó correctamente")</script>';
    //echo "La base de datos libros se creó correctamente\n";
} else {
    echo 'Error al crear la base de datos: ' . mysqli_errno($conexion) . "\n";
}


mysqli_close($conexion);

$conexion = new mysqli("localhost", "root", "", "libros");
if (!$conexion) {
    echo "Fallo de conexión a MySQL: " . $conexion->connect_error;
}

// La variable que creara la tabla en la base de datos.
$tabla_libros= "CREATE TABLE libros(
num_ejemplar INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
titulo VARCHAR(50) NOT NULL,
año_edicion YEAR NOT NULL,
precio DECIMAL(5,2) NOT NULL,
fecha_compra DATE NOT NULL
)";
$tabla_logins= "CREATE TABLE logins(
    usuario VARCHAR(50) NOT NULL UNIQUE,
    pass VARCHAR(50) NOT NULL
    )";



if(mysqli_query($conexion, $tabla_libros) && mysqli_query($conexion, $tabla_logins)){
    echo '<script>alert("Las tablas libros y logins se crearon correctamente")</script>';
    echo '<script>alert("Ahora puedes iniciar sesión")</script>';
    echo '<script>window.location= "../login.php"</script>';
}else{
    echo '<script>alert("Error al crear la base de datos")</script>';
    echo '<script>window.location= "../login.php"</script>';
}

//header("Location: ../login.php");
?>
