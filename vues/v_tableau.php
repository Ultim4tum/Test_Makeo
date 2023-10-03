<!DOCTYPE html>
<html>
<head>
    <title>Tableau Makeo</title>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="tab">
        <table>
            <tr>
                <td>Nom et prénom</td>
                <td>Mail</td>
                <td>Message</td>
            </tr>
            <?php
/* Pour chaque ligne qu'on a reçut, on affiche les données correpondantes voulu, ici le nom, le prenom, le mail et le message. */
            foreach ($donnee as $ligne) {
                echo '<tr>';
                echo '<td>' . $ligne['Nom_prenom'] . '</td>';
                echo '<td>' . $ligne['Mail'] . '</td>';
                echo '<td>' . $ligne['Msg'] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>
</body>
</html>
