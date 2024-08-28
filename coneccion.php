<?php
$servername = "localhost";
$username = "root"; // Cambia esto si tienes un usuario diferente
$password = ""; // Cambia esto si tienes una contraseña
$dbname = "lujos_spa";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el dato del formulario
$nombre = $_POST['nombre'];
// $apellido = $_POST['apellido'];

// Insertar el dato en la base de datos
$sql = "INSERT INTO citas (nombre) value ('$nombre')";

if ($conn->query($sql) === TRUE) {
    echo "Dato insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>