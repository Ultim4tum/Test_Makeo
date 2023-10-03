<?php
include 'modele/class.pdoMakeo.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST["name"];
    $mail = $_POST["mail"];
    $msg = $_POST["message"];

    $model = new pdoMakeo();
    $model->creerMsg($nom, $mail, $msg);
}

$donnePdo = new pdoMakeo();
$donnee = $donnePdo->getDonneTab();

include 'vues/vue.php';
include 'vues/v_tableau.php';
?>
