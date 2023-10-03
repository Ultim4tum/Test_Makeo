<?php
include 'modele/class.pdoMakeo.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST["name"];
    $mail = $_POST["mail"];
    $msg = $_POST["message"];

    $model = new pdoMakeo();
    $model->creerMsg($nom, $mail, $msg);
}

$dataModel = new pdoMakeo();
$data = $dataModel->getDonneTab();

include 'vues/vue.php';
include 'vues/v_tableau.php';
?>
