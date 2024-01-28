<?php

class Core
{

    protected $curcontroller = "Mainpage";
    protected $curmethod = "index";
    protected $params = [];

    public function __construct()
    {
        $url = $this->geturl();




        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->curcontroller = ucwords($url[0]);
            // echo "<pre>" . print_r($this->curcontroller, true) . "</pre>";
            unset($url[0]);

        } else {
            echo "No class";
        }



        require_once('../app/controllers/' . $this->curcontroller . '.php');
        $this->curcontroller = new $this->curcontroller;

        // echo "<pre>" . print_r($url, true) . "</pre>";


        if (isset($url[1])) {
            if (method_exists($this->curcontroller, $url[1])) {
                // echo "method exits";
                $this->curmethod = $url[1];

                unset($url[1]);
            }
        }



        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->curcontroller, $this->curmethod], $this->params);







    }

    public function geturl()
    {
        // echo rtrim($_GET['url']);  this remove whitespaces and   This function is particularly useful when dealing with user inputs, form submissions, or other situations where you want to clean up or normalize strings.
        $url = isset($_GET['url']) ? rtrim($_GET['url']) : '';
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }
}



?>