<?php

namespace Core;

class Request
{
    const METHOD_POST = 'POST';
    const METHOD_GET = 'GET';

    public $get;
    public $post;
    public $server;

    public function __construct(array $get, array $post, array $server)
    {
        $this->get = $get;
        $this->post = $post;
        $this->server = $server;
    }


    public function isGet()
    {
        return $this->server['REQUEST_METHOD'] === self::METHOD_GET;
    }

    public function isPost()
    {
        return $this->server['REQUEST_METHOD'] === self::METHOD_POST;
    }

    public function isMethod()
    {
        return $this->server['REQUEST_METHOD'];
    }

}