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

        $items = $this->mainmodel->index();



        $data = [

            'items' => $items


        ];

        $this->view('productpage/index', $data);
    }


    public function create()
    {



        // if ($_SERVER['REQUEST_METHOD'] == "POST") {

        //     $image = $_FILES['image'];
        //     $uploaddir = IMG_UPLOAD . "/public/assets/items/";
        //     $uploadfile = $uploaddir . basename($image['name']);

        //     move_uploaded_file($image['tmp_name'], $uploadfile);

        //     $insertimg = "/public/assets/items/" . basename($image['name']);

        //     $data = [
        //         "image" => $insertimg,
        //         "name" => trim($_POST['name']),
        //         "price" => trim($_POST['price']),
        //         "description" => trim($_POST['description']),
        //         "category_id" => trim($_POST['category_id']),
        //         "status_id" => trim($_POST['status_id']),
        //         "brand_id" => trim($_POST['status_id']),

        //         "nameerr" => "",
        //         "priceerr" => "",
        //         "descriptionerr" => "",
        //         "categoryerr" => "",
        //         "statuserr" => "",
        //         "branderr" => "",


        //     ];

        //     $this->mainmodel->createitems($data);




        // }





        $this->view('productpage/create');
    }


}



?>
<!-- Note:: - ls -l /opt/lampp/htdocs/mvc/mvcdashboard/public/assets/ -->
<!-- Note:: - chmod -R 777 /opt/lampp/htdocs/mvc/mvcdashboard/public/assets/ -->