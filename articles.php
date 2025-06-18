<?php
require_once 'database.php';
require_once 'utils.php';
require_once 'models/Article.php';

// 1 - logic ==> recuperation des donnes du model
$articleModel = new Article();
$articles = $articleModel->findAll($pdo);

//2- renvoyer une vue / un affichage 
render('articles', [
    'title' => "liste des articles",
    'articles' => $articles
]);