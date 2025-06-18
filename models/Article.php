<?php

class Article {

    public function findAll($pdo) {
        $sql = "SELECT * FROM articles";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function findOneById($pdo, $id) {
        $sql = "SELECT * FROM articles WHERE id = :id";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([':id' => $id]);

        return  $stmt->fetch(PDO::FETCH_ASSOC);
    }
}