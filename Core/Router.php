<?php

namespace Core;

use Core\Request;

class Router
{

    protected $request;
    protected $controllerName;
    protected $defaultAction;
    protected $act;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->setParams();
    }

    public function getCtrl()
    {
        return $this->controllerName;
    }

    public function getAct()
    {
        return !empty($this->request->get['act']) ?? $this->defaultAction;
    }

    private function setParams()
    {
        $controller = $_GET['con'] ?? 'article';

        switch ($controller){
            case 'article':
                $this->controllerName = 'Controllers\ArticleController';
                $this->defaultAction = 'index';
                break;
            case 'page':
                $this->controllerName = 'Controllers\PageController';
                $this->defaultAction = 'about';
                break;
            default:
                $this->controllerName = 'Controllers\PageController';
                $this->defaultAction = 'pageNotFound';
                break;
        }
    }

}