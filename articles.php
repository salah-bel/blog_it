<?php
require_once 'database.php';
require_once 'utils.php';
// recuprer les articles de la bdd

$sql = "SELECT * FROM articles";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

+
render('articles', [
    'title' => "liste des articles",
    'articles' => $articles
]);