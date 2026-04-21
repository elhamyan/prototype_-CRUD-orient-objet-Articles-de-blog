<?php

class Article {
    private $conn;

    public function setConnection($db) {
        $this->conn = $db;
    }

    // CREATE
    public function create($titre, $contenu) {
        $stmt = $this->conn->prepare(
            "INSERT INTO article (titre, contenu) VALUES (?, ?)"
        );
        return $stmt->execute([$titre, $contenu]);
    }

    // READ
    public function read() {
        return $this->conn->query("SELECT * FROM article");
    }

    // DELETE
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM article WHERE id=?");
        return $stmt->execute([$id]);
    }
}
?>