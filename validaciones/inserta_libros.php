<?php

include("conexion_db.php");


if (isset($_POST['submit'])) {

    error_reporting(0);

    $titulo = $_POST['titulo_libro'];
    $anio = $_POST['año_edi'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha_adq'];
    $f= explode("/", $fecha);
    $f_format= $f[2]."/".$f[1]."/".$f[0];
    
   
    $insertado = '\n El título es: ' . $titulo . '\n El año es: ' . $anio . '\n El precio es: ' . $precio . '\n La fecha de adquisición es: ' . $fecha;

    if ($titulo == "" || $anio == "" || $precio == "" || $fecha == "") {
        echo '<script>
                alert("Rellena todos los campos")
                window.location= "../libros.php"
            </script> ';
    } else {
        $consulta = "INSERT INTO libros (titulo, año_edicion, precio, fecha_compra) VALUES ('$titulo', '$anio', '$precio', '$f_format')";
        $query = mysqli_query($conn, $consulta);
        if ($query) {
            echo '<script>
                    alert("Libro guardado correctamente")
                    window.location= "../libros.php"
                </script> ';
        } else {
            echo '<script>
                    alert("Error al guardar el libro")
                    window.location= "../libros.php"
                </script> ';
        }
    } 

}





?>