<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];

    $contenido="
    Nombre: $nombre
    Correo Electronico: $email
    Telefono: $telefono";

    $archivo = fopen("registros/$nombre.TXT", "w");
    fwrite($archivo, $contenido);
    ?>
</body>
</html>