<?php

namespace Controllers;

use Core\Request;

abstract class Controller
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function __call($name, $params)
    {
        $pageNotFound = new PageController($this->request);
        $pageNotFound->pageNotFound();
    }
    protected function render($filename, $values = [])
    {
        extract($values);
        ob_start();
        include ("$filename");
        return ob_get_clean();
    }
}