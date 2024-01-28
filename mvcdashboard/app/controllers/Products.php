<?php


class Products extends Controller
{


    public $mainmodel;
    public function __construct()
    {
        $this->mainmodel = $this->model('Product');
    }

    public function index()
    {

        $data = [
            'title' => 'Main',
        ];

        $this->view('products/index', $data);
    }



}



?>