<?php
require_once 'config.php';

// 5 boeken toevoegen als de tabel leeg is
$check_sql = "SELECT COUNT(*) FROM boeken_agenda";
$count = $conn->query($check_sql)->fetchColumn();

if ($count == 0) {
    // Voeg 5 boeken toe met de juiste kolomnamen
    $boeken = [
        ['Harry Potter en de Steen der Wijzen', 'J.K. Rowling', 'Fantasy', '1997-06-26'],
        ['De Hobbit', 'J.R.R. Tolkien', 'Fantasy', '1937-09-21'],
        ['1984', 'George Orwell', 'Dystopie', '1949-06-08'],
        ['De Alchemist', 'Paulo Coelho', 'Filosofie', '1988-08-17'],
        ['Het Diner', 'Herman Koch', 'Thriller', '2009-02-14']
    ];
    
    $insert_sql = "INSERT INTO boeken_agenda (Onderwerp, Auteur, Genre, Startdatum) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($insert_sql);
    
    foreach ($boeken as $boek) {
        $stmt->execute($boek);
    }
    
    echo "<p style='color: green;'>5 boeken toegevoegd aan de database!</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Boeken Agenda</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Boeken Agenda - Database Overzicht</h1>
    
    <?php
    echo "<p>Database connectie werkt!</p>";
    
    // Toon alle boeken
    $sql = "SELECT * FROM boeken_agenda ORDER BY id";
    $result = $conn->query($sql);
    
    echo "<h2>Alle boeken in de database:</h2>";
    echo "<table>";
    
    // Header
    echo "<tr><th>ID</th><th>Onderwerp</th><th>Auteur</th><th>Genre</th><th>Startdatum</th></tr>";
    
    // Data
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Onderwerp'] . "</td>";
        echo "<td>" . $row['Auteur'] . "</td>";
        echo "<td>" . $row['Genre'] . "</td>";
        echo "<td>" . $row['Startdatum'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    // Toon aantal boeken
    $count_sql = "SELECT COUNT(*) FROM boeken_agenda";
    $total = $conn->query($count_sql)->fetchColumn();
    echo "<p><strong>Totaal aantal boeken:</strong> " . $total . "</p>";
    ?>
    
</body>
</html>