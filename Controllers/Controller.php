<?php

namespace Controllers;

abstract class Controller
{
    protected $get;
    protected $post;

    public function __construct(array $get, array $post)
    {
        $this->get = $get;
        $this->post = $post;
    }
    protected function render($filename, $values = [])
    {
        extract($values);
        ob_start();
        include ("$filename");
        return ob_get_clean();
    }
}