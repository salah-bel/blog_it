<?php
require_once 'models/Article.php';

class ArticleController
{
    private $articleModel;
    public function __construct(){
        $this->articleModel = new Article();
    }

    public function index($pdo)
    {
        // 1 - logic ==> recuperation des donnes du model
        $articles = $this->articleModel->findAll($pdo);
        
        // 2- renvoyer une vue / un affichage 
        render('articles', [
            'title' => "Liste des articles",
            'articles' => $articles
        ]);
    }

    public function show($pdo, $id)
    {
        $article = $this->articleModel->findOneById($pdo, $id);
        
        if (!$article) {
            // Handle not found case
            render('404', ['title' => 'Article Not Found']);
            return;
        }

        render('article', [
            'title' => $article['title'],
            'article' => $article
        ]);
    }
}