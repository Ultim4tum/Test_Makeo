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