<?php
// Database configuratie
$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "jgdatabase";     

// Maak de verbinding
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
echo "Succesvol verbonden met de database!";
?>
