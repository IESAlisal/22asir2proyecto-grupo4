<?php include "validaciones/no_sesion.php" ?>

<!doctype html>
<head>
<link rel="stylesheet" href="css/form.css">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />


<title>Libros guardados</title>
</head>
<body>

<?php 
    include 'validaciones/conexion_db.php';
    $libros = $conn->query("SELECT * FROM libros");
?>   

<div class="form">
<h1>LISTADO DE LIBROS</h1>
<table id="lista_libros">
    <thead>
    <tr>
        <th>Número de ejemplar</th>
        <th>Título</th>
        <th>Año de edición</th>
        <th>Precio</th>
        <th>Fecha de adqusición</th>
    </tr>
    </thead>
    <tbody>
        <?php while($row = $libros->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['num_ejemplar']; ?></td>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['año_edicion']; ?></td>
                <td><?php echo $row['precio']; ?></td>
                <td><?php echo $row['fecha_compra']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

    <input type="button" value="Volver" onclick="window.location.href='libros.php'">
</div>

</body>

</html>