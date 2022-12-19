<?php 
include 'conexion_db.php';



//Crear usuario

if(isset($_POST['name']) && isset($_POST['key1']) && isset($_POST['key2'])){

$name=$_POST['name'];
$key1=$_POST['key1'];
$key2=$_POST['key2'];

$repite= mysqli_query($conn,"SELECT * FROM logins WHERE usuario='$name'");
    if(mysqli_num_rows($repite)>0){
        echo '<script>
        alert("El usuario ya existe")
        window.location= "../registro.php"
    </script> ';
    }

    if($key1 == $key2 && $name != "" && $key1 != "" && $key2 != ""){
        $insertar = "INSERT INTO logins (usuario, pass) VALUES ('$name', md5('$key1'))";
        $query = mysqli_query($conn, $insertar);
        echo '<script>
        alert("Ususario creado correctamente")
        window.location= "../login.php"
    </script> ';
    }elseif($key1 != $key2){
        echo '<script>
        alert("Las contraseñas no coinciden")
        window.location= "../registro.php"
    </script> ';

}else{
    echo '<script>
    alert("Rellena todos los campos")
    window.location= "../registro.php"
</script> ';
}
}

?>

