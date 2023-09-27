<?php
    include("../../db/connectionDB.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New user</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/signUp.css'>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" required>
        
        <label for="correoElectronico">Correo Electrónico</label>
        <input type="email" name="correoElectronico" id="correoElectronico">
        
        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena">

        <label for="fotoPerfil">Foto de Perfil</label>
        <input type="file" name="fotoPerfil" id="fotoPerfil">

        <label for="edad">Edad</label>
        <input type="number" min="13" max="99" name="edad" id="edad">

        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" id="provincia">

        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" id="localidad">
        
        <label for="dirección">Dirección</label>
        <input type="text" name="dirección" id="dirección">

        <label for="codigoPostal">Código Postal</label>
        <input type="number" name="codigoPostal" id="codigoPostal">

        <label for="numeroTelefono">Número de Teléfono</label>
        <input type="number" name="numeroTelefono" id="numeroTelefono">

        <input type="submit" value="Crear cuenta" name="crearCuenta">
    </form>
</body>
</html>

<?php
    if(isset($_POST['crearCuenta'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correoElectronico = $_POST['correoElectronico'];
        $contrasena = $_POST['contrasena'];
        $fotoPerfil = $_POST['fotoPerfil'];
        $edad = $_POST['edad'];
        $provincia = $_POST['provincia'];
        $localidad = $_POST['localidad'];
        $direccion = $_POST['direccion'];
        $codigoPostal = $_POST['codigoPostal'];
        $numeroTelefono = $_POST['numeroTelefono'];

        $nuevoUsuarioSentenciaSQL = "INSERT INTO Usuario VALUES('$nombre', '$apellido', '$correoElectronico', '$contrasena', '$fotoPerfil', '$edad', '$provincia', '$localidad', '$direccion', '$codigoPostal', '$numeroTelefono')";

        $consulta = mysqli_query($conexionDB, $nuevoUsuarioSentenciaSQL);
        $registro = mysqli_fetch_assoc($nuevoUsuarioSentenciaSQL);

        if(($ = mysqli_num_rows) > 0) {

        }
    }
?>