<?php
// Database configuratie
$servername = "102530_DB";
$username = "102530_DB";
$password = "Jorge.simoes135";
$dbname = "102530_PROGRAM1"; // Database naam aangepast voor de opdracht

// Error reporting aanzetten (zoals gevraagd in de opdracht)
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  echo "Connected successfully to database: $dbname";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 
 