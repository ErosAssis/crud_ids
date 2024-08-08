<?php
$servername = "db";
$username = "root"; // Altere se necessário
$password = ""; // Altere se necessário
$dbname = "crud_ids";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
