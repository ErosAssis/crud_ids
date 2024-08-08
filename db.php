<?php
$servername = "db";
$username = "eros"; // Altere se necessário
$password = "mydba"; // Altere se necessário
$dbname = "crud_ids";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
