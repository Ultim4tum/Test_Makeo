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

    public function __destruct(){
        $this->baseDeDonne = null;
    }

    public function creerMsg($nom, $mail, $msg) {
        $query = $this->baseDeDonne->prepare('INSERT INTO infos (Nom_prenom, Mail, Msg) VALUES (:VNomPrenom, :VMail, :Vmsg)');
        $query->bindValue(':VNomPrenom', $nom);
        $query->bindValue(':VMail', $mail);
        $query->bindValue(':Vmsg', $msg);
        return $query->execute();
    }

    public function getDonneTab() {
        $query = $this->baseDeDonne->query('SELECT * FROM infos');
        return $query->fetchAll();
    }
}
?>
