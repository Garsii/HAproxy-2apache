<?php
$servername = "mysql";
$username = "root";
$password = "rootpassword";
$dbname = "testdb";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Prepara y vincula la consulta SQL para evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $email);  // 'ss' indica que los parámetros son de tipo string

    // Ejecuta la consulta
    if ($stmt->execute()) {
        echo "Nuevo usuario registrado correctamente";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cierra la consulta y la conexión
    $stmt->close();
}

// Cierra la conexión
$conn->close();
?>
