<?php include "validaciones/no_sesion.php" ?>
<!doctype html>
<head>
<link rel="stylesheet" href="css/form.css">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/form.css">

<title>Borrado de libros.</title>
</head>
<body>



<br>



<div class="form">

<div class="" id="mostrar">
    <form class="login-form" method="post" action="">
    <h1>LIBROS QUE SE VAN A BORRAR</h1>
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
    </form>


    </div>

    <div class="tabla_1" id="tabla">


        <div class="">

        <form class="login-formu" method="post" action=""> 
        <input type="hidden" name="lib_act" value="<?php echo $titulo ?>">
        <input type="submit" value="Borrar" name="borrar">
        </form>
        <input type="button" value="Volver" onclick="window.location.href='index.php'">
        </div>


        <?php 
        error_reporting(0);
        if (isset($_POST['borrar'])){
            $titulo = $_POST['lib_act'];
            $delete_libros = "DELETE FROM libros WHERE titulo = '$titulo'"; 
            $query = mysqli_query($conn, $delete_libros);
            echo  "<span id='esconder'> El precio del libro era de $precio euros </span> <br>";
            header("Refresh: 9");
        }
        
      ?>

      <script>
            document.getElementById('esconder').style.display = 'block';
            setTimeout(esconder, 9000);
            function esconder(){
                document.getElementById('esconder').style.display = 'none';
            }

    </script>

    
    
    </table>

   
</div>

</body>
</html>