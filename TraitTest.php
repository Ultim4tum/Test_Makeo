<!DOCTYPE html>
<hmtl>

    <head>
        <title> Tableau Makeo</title>
        <link rel="stylesheet" href="./style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <?php
        try {
            // On se connecte à MySQL
            $bdd = new PDO('mysql:host=localhost;dbname=test_makeo;charset=utf8', "root", '');
        } catch (Exception $e) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : ' . $e->getMessage());
        }

        $nom = $_POST["name"];
        $mail = $_POST["mail"];
        $msg = $_POST["message"];

        $res = $bdd->prepare('INSERT INTO infos (Nom_prenom, Mail , Msg) VALUES ( :VNomPrenom, :VMail, :Vmsg)');
        $res->bindValue(':VNomPrenom', $nom);
        $res->bindValue(':VMail', $mail);
        $res->bindValue(':Vmsg', $msg);
        $res->execute();

        $request = $bdd->query("SELECT * from infos");
        ?>
        <div class="tab">
            <table>
                <tr>
                    <td>Nom et prenom</td>
                    <td>Mail</td>
                    <td>Message</td>
                </tr>
                <?php
                while ($ligne = $request->fetch()) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $ligne['Nom_prenom'] ?>
                        </td>
                        <td>
                            <?php echo $ligne['Mail'] ?>
                        </td>
                        <td>
                            <?php echo $ligne['Msg'] ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </body>
</hmtl>