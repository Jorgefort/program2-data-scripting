<?php
require_once 'config.php';

$check_sql = "SELECT COUNT(*) FROM boeken_agenda";
$count = $conn->query($check_sql)->fetchColumn();

if ($count == 0) {
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
}

$sql = "SELECT ID, Onderwerp FROM boeken_agenda ORDER BY ID";
$result = $conn->query($sql);
$boeken = $result->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Boeken Overzicht</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; color: blue; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Boeken Agenda</h1>
    
    <h2>Overzicht van alle boeken:</h2>
    <table>
        <tr>
            <th>Onderwerp</th>
        </tr>
        <?php
        for($i = 0; $i < count($boeken); $i++) {
            echo "<tr>";
            echo "<td>";
            echo "<a href='detail.php?id=" . $boeken[$i]['ID'] . "'>";
            echo $boeken[$i]['Onderwerp'];
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    
    <p>Totaal aantal boeken: <?php echo count($boeken); ?></p>
    
</body>
</html>