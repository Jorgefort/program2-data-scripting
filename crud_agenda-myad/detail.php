<?php
require_once 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM boeken_agenda WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
$boek = $stmt->fetch();

include 'detail_view.php';
?>