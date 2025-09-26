<!DOCTYPE html>
<html>
<head>
    <title>Boek Details</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .detail-box { border: 1px solid #ddd; padding: 20px; max-width: 500px; }
        .detail-row { margin: 10px 0; }
        .label { font-weight: bold; }
        a { text-decoration: none; color: blue; padding: 10px 15px; border: 1px solid blue; }
        a:hover { background-color: blue; color: white; }
    </style>
</head>
<body>
    <h1>Boek Details</h1>
    
    <?php
    if($boek) {
        echo "<div class='detail-box'>";
        echo "<div class='detail-row'>";
        echo "<span class='label'>ID:</span> " . $boek['ID'];
        echo "</div>";
        echo "<div class='detail-row'>";
        echo "<span class='label'>Onderwerp:</span> " . $boek['Onderwerp'];
        echo "</div>";
        echo "<div class='detail-row'>";
        echo "<span class='label'>Auteur:</span> " . $boek['Auteur'];
        echo "</div>";
        echo "<div class='detail-row'>";
        echo "<span class='label'>Genre:</span> " . $boek['Genre'];
        echo "</div>";
        echo "<div class='detail-row'>";
        echo "<span class='label'>Startdatum:</span> " . $boek['Startdatum'];
        echo "</div>";
        echo "</div>";
    } else {
        echo "<p>Boek niet gevonden.</p>";
    }
    ?>
    
    <p>
        <a href="index.php">Terug naar overzicht</a>
    </p>
    
</body>
</html>