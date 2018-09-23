<?php

namespace Controllers;

use Models\ArticleModel;

class ArticleController extends Controller
{

    public function index()
    {
        $mArticle = new ArticleModel();
        $articles =$mArticle->getAll();

        echo $this->render('Views/index.php', [
            'articles' => $articles
        ]);
    }

    public function show()
    {
        $mArticle = new ArticleModel();
        $article = $mArticle->getById($this->get['id']);

        echo $this->render('Views/show.php', [
            'article' => $article
        ]);
    }

    
}