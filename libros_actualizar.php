<?php include "validaciones/no_sesion.php" ?>
<!doctype html>
<head>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/form.css">

<title>Actualización de libros.</title>
</head>
<body>



<br>



<div class="form">
<h1>LIBROS QUE SE VAN A ACTUALIZAR</h1>
<div class="" id="mostrar">

    <form class="login-form" method="post" action="">

    <select name="lib_act">

      <?php

        include 'validaciones/conexion_db.php';

        $select_libros = "SELECT * FROM libros";
        $query = mysqli_query($conn, $select_libros);

        //error_reporting(0);

            while( $row = mysqli_fetch_array($query)){
    
            $titulo = $row['titulo'];
            $precio = $row['precio'];
        ?>
                        
            <option name="option" value="<?php echo $titulo ?>"><?php echo $titulo ?></option>
        <?php
      };
        ?>

    </select>
    <input type="submit" value="Mostrar" name="mostrar">
    </form>

    


   <?php 

        error_reporting(0);



        if(isset($_POST['mostrar'])){
            $titulo = $_POST['lib_act'];
            $select_libros = "SELECT * FROM libros WHERE titulo = '$titulo'";
            $query = mysqli_query($conn, $select_libros);
            $row = mysqli_fetch_array($query);
            $precio = $row['precio'];
            $titulo = $row['titulo'];
        }
    ?>



    </div>

    <div class="tabla_1" id="tabla">

    <table>
        <thead>
        <tr>
            <th>Título</th>
            <th>Precio</th>
        </tr>
        </thead>
        <tbody>

      
            <tr>
                <td><?php echo $titulo; ?></td>
                <td><?php echo $precio ?> Euros</td>
                
            </tr>

            
        </tbody>

        <div class="">


        <form class="login-formu" method="post" action="">
        <input type="number" step="any" max="1000" placeholder="Ingrese la cantidad" name="actu_libro">
        <input type="hidden" name="lib_act" value="<?php echo $titulo ?>">
        <input type="submit" value="Actualizar" name="actualiza">
        <input type="button" value="Volver" onclick="window.location.href='index.php'">
        </form>

        </div>
    
    
    </table>
    <br>

     <?php 
        if (isset($_POST['actualiza']) && $_POST['actu_libro'] != ""){
            $precio_nuevo = $_POST['actu_libro'];
            $titulo = $_POST['lib_act'];
            $update_libros = "UPDATE libros SET precio = '$precio_nuevo' WHERE titulo = '$titulo'";
            $query = mysqli_query($conn, $update_libros);
            echo  "<span id='actualizado'> El precio del libro $titulo se ha actualizado a $precio_nuevo euros </span>";
        }else{
            echo  "<span id='actualizado'> Introduzca un importe. </span>";
        }
      ?>
      <script>
            document.getElementById('actualizado').style.display = 'block';
            setTimeout(actualizado, 9000);
            function actualizado(){
                document.getElementById('actualizado').style.display = 'none';
            }
            

    </script>
</div>

</body>
</html>