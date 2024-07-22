<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $vacante = $_POST['vacante'];
    $sucursal = $_POST['sucursal'];

    $datos = "Nombre: $nombre, Teléfono: $telefono, Vacante: $vacante, Sucursal: $sucursal\n";

    file_put_contents('solicitudes.txt', $datos, FILE_APPEND);
    echo "Solicitud recibida. Gracias.";
}
?>
