<?php


class Productpage extends Controller
{


    public $mainmodel;
    public function __construct()
    {
        $this->mainmodel = $this->model('Product');
    }

    public function index()
    {

        $data = [
            'title' => 'Product',
        ];

        $this->view('productpage/index', $data);
    }



}



?>