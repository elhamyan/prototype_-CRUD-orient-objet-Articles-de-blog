<?php 
require 'database.php';
class Article{
    public function  readAll(){
        $db = new Database();

        $conn = $db->getConnection();

        $sql = "SELECT titre,contenu,id_utilisateur,date_pub FROM article";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    private $conn;

    public function setConnection($db) {
        $this->conn = $db;
    }

    public function create($titre, $contenu) {
        $query = "INSERT INTO article (titre, contenu) VALUES (:titre, :contenu)";
        
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':contenu', $contenu);

        return $stmt->execute();
}
     
}


?>
