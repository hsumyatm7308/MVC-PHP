<?php


class Mainpage extends Controller
{


    public $mainmodel;
    public function __construct()
    {
        $this->mainmodel = $this->model('Main');
    }

    public function index()
    {

        $data = [
            'title' => 'Main',
        ];

        $this->view('mainpage/index', $data);
    }



}



?>