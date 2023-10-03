<!DOCTYPE html>
<html>
<head>
    <title>Tableau Makeo</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="tab">
        <!-- On affiche un tableau qui fait part de toutes les données dans la BDD -->
        <table>
            <tr>
                <td>Nom et prénom</td>
                <td>Mail</td>
                <td>Message</td>
            </tr>
            <?php
            // Ici, on parcours la variable qui possède les données de la bdd,
            // Pour chaque ligne de la bdd, on affiches les données voulu, 
            // ici, le nom et le prenom, le mail et enfin le message laissé par l'utilisateur
            foreach ($data as $row) {
                echo '<tr>';
                echo '<td>' . $row['Nom_prenom'] . '</td>';
                echo '<td>' . $row['Mail'] . '</td>';
                echo '<td>' . $row['Msg'] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>
</body>
</html>