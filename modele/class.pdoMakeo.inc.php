<?php
class pdoMakeo {
    private $baseDeDonne;

    public function __construct() {
        try {
            // Connexion à la base de données
            $this->baseDeDonne = new PDO('mysql:host=localhost;dbname=test_makeo;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
            // initialisation de la fonction de destruction de variable
    public function __destruct(){
        $this->baseDeDonne = null;
    }

            // Creation de la fonction qui permet d'entrer les informations du message envoyer a la base de donnée
    public function creerMsg($nom, $mail, $msg) {
        //On définie la requete SQL de création du nouveau message dans la BDD
        $query = $this->baseDeDonne->prepare('INSERT INTO infos (Nom_prenom, Mail, Msg) VALUES (:VNomPrenom, :VMail, :Vmsg)');
        //On redéfini les valeurs qui était défini dans la requete SQL par des variables temporaires
        $query->bindValue(':VNomPrenom', $nom);
        $query->bindValue(':VMail', $mail);
        $query->bindValue(':Vmsg', $msg);
        return $query->execute();
    }
//Creation de la fonction qui retourne les données de la table
    public function getDonneTab() {
        //Requete qui demande de selectionner toutes les informations présentes dans la tablea 'infos'
        $query = $this->baseDeDonne->query('SELECT * FROM infos');
        return $query->fetchAll();
    }
}
?>
