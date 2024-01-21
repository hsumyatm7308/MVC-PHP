<?php

class Core
{
    public function __construct()
    {
        $this->geturl();
        echo "<pre>" . print_r($this->geturl(), true) . "</pre>";

    }

    public function geturl()
    {
        // echo rtrim($_GET['url']);  this remove whitespaces and   This function is particularly useful when dealing with user inputs, form submissions, or other situations where you want to clean up or normalize strings.
        $url = isset($_GET['url']) ? rtrim($_GET['url']) : '';
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        print_r($url);
    }
}



?>