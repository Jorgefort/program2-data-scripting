<?php
// Database configuratie
$servername = "localhost";  // Meestal localhost op PLESK
$username = "102530_DB";
$password = "Jorge.simoes135";
$dbname = "102530_DB";  // Je echte database naam

// Error reporting aanzetten
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Simpele PDO connectie
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>