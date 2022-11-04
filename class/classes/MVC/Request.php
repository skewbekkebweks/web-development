<?php

namespace Class\Classes\Mvc;
class Request
{
    private $get;
    private $post;

    public function __construct()
    {
        $this->get = $_GET;
        $this->post = $_POST;
    }
    public function getParam(string $name, $default=null)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            return isset($_GET[$name]) ? $_GET[$name] : $default;
        }
        return isset($_POST[$name]) ? $_POST[$name] : $default;
    }
    public function getUrl()
    {
        return $_SERVER['REQUEST_URI'];
    }
}