<?php
class pdoMakeo {
    private $BaseDeDonne;

    //Creation de la fonction de construction , qui lie la variable a la bdd
    public function __construct() {
        try {
            // Connexion à la base de données
            $this->BaseDeDonne = new PDO('mysql:host=localhost;dbname=test_makeo;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function __destruct(){
        $this->BaseDeDonne = null;
    }

    //Creation de la fonction qui permet de créer une ligne dans la base de donnée, en utilisant les variables entrées en parametre
    public function CreerMsg($nom, $mail, $msg) {
        $query = $this->BaseDeDonne->prepare('INSERT INTO infos (Nom_prenom, Mail, Msg) VALUES (:VNomPrenom, :VMail, :Vmsg)');
        $query->bindValue(':VNomPrenom', $nom);
        $query->bindValue(':VMail', $mail);
        $query->bindValue(':Vmsg', $msg);
        return $query->execute();
    }

    //Creation de la fonction qui renvoie les données présentes dans la table infos
    public function getDonneTab() {
        $query = $this->BaseDeDonne->query('SELECT * FROM infos');
        return $query->fetchAll();
    }
}
?>