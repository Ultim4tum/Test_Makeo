<?php
class pdoMakeo {
    private $BaseDeDonne;

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

    public function CreerMsg($nom, $mail, $msg) {
        $query = $this->BaseDeDonne->prepare('INSERT INTO infos (Nom_prenom, Mail, Msg) VALUES (:VNomPrenom, :VMail, :Vmsg)');
        $query->bindValue(':VNomPrenom', $nom);
        $query->bindValue(':VMail', $mail);
        $query->bindValue(':Vmsg', $msg);
        return $query->execute();
    }

    public function getDonneTab() {
        $query = $this->BaseDeDonne->query('SELECT * FROM infos');
        return $query->fetchAll();
    }
}
?>