<?php

namespace Controllers;


class PageController extends Controller
{
    public function about()
    {
        echo $this->render('Views/about_page.php');
    }

    public function pageNotFound()
    {
        header('HTTP/1.1 404');
        echo $this->render('Views/404.php');
    }
}