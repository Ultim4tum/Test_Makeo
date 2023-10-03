<?php

//On inclue le fichier qui permet de crée un variable lié a la base de donnée en déclarant un objet du type de la classe
include 'class.pdoMakeo.inc.php';

//Si on detecte qu'un poste a été fait via le formulaire, on initialise les variables qui vont permettre de rentrer le message ainsi que les info
// de l'utilisateur dans la bdd
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST["name"];
    $mail = $_POST["mail"];
    $msg = $_POST["message"];

    $model = new pdoMakeo();
    //Ici on crée le nouveau message avec les différentes variable qui correspondent au données utilisateur
    $model->CreerMsg($nom, $mail, $msg);
}

//On déclare un nouvel objet qui prend pour type notre class qui intéragie avec la bdd
$dataModel = new pdoMakeo();

//on crée une variable qui va stocket toutes les informations présentes dans la base de donnée
$data = $dataModel->getDonneTab();


//On inclue les différentes vues qui permettent l'affichages des éléments sur la page
include 'vue.php';
include 'v_tableau.php';
?>