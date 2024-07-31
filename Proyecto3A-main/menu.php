<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
<?php
    $usuario = "Alumno";
    $contrasena = "12345678";

    if(isset($_POST['usr'])&&isset($_POST['pwd'])){
    
    if ($usuario == $_POST["usr"] && $contrasena == $_POST["pwd"]) {
        session_start();
        $_SESSION['usuario'] = $_POST['usr'];
        $_SESSION['contrasena'] = $_POST['pwd'];
        echo "Bienvenido " . $_SESSION['usuario'] . "<br>";
        echo "<br><br>";
    } else {
        header("Location: index.php?error=si");
    }}
    ?>
</body>
</html>