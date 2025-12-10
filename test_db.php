<?php
$conn = new mysqli('mysql.railway.internal', 'root', 'PORhYhGELpBjpHUETbQFsvUhBlLvjQPI', 'railway', 3306);

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}
echo "Conexión OK!";
?>
