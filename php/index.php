<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "testdb";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT 'Hola Mundo' as saludo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["saludo"];
    }
} else {
    echo "0 resultados";
}

$conn->close();
echo "Hola Devops\n";
?>