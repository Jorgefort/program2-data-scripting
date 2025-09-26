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
        <?php foreach($boeken as $boek): ?>
        <tr>
            <td>
                <a href="detail.php?id=<?php echo $boek['ID']; ?>">
                    <?php echo $boek['Onderwerp']; ?>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <p>Totaal aantal boeken: <?php echo count($boeken); ?></p>
    
</body>
</html>