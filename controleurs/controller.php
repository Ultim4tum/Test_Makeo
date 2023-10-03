<?php
//On inclue le modele de la classe pdoMakeo qui permet de se servir de ses fonction et ainsi interagir avec la base de donnée
include 'modele/class.pdoMakeo.inc.php';

//Si on detecte qu'un message est envoyer alors on initialise les variables visant a créer un message qui ensuite sera entré dans la BDD grace a la fonction creerMSg()
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST["name"];
    $mail = $_POST["mail"];
    $msg = $_POST["message"];

    $model = new pdoMakeo();
    $model->creerMsg($nom, $mail, $msg);
}

//On declare maintenant une nouvelle variable qui prend en type la base de donnée et qui nous permet d'utiliser ses methodes
$donnePdo = new pdoMakeo();
//On initualise une variable qui recupere les données pour l'affichage du tableau
$donnee = $donnePdo->getDonneTab();


//On inclue les vues de différentes pages.
include 'vues/vue.php';
include 'vues/v_tableau.php';
?>
