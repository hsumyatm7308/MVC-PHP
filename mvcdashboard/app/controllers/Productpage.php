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


    public function store()
    {



        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization");


        $image = $_FILES['image'];
        $uploaddir = IMG_UPLOAD . "/public/assets/items/";
        $uploadfile = $uploaddir . basename($image['name']);

        move_uploaded_file($image['tmp_name'], $uploadfile);

        $insertimg = "/public/assets/items/" . basename($image['name']);

        $data = [
            "image" => $insertimg,
            "name" => trim($_POST['name']),
            "description" => trim($_POST['description']),
            "price" => trim($_POST['price']),
            "quantity" => trim($_POST['quantity']),
            "discount" => trim($_POST['discount']),

            "category_id" => trim($_POST['category_id']),
            "status_id" => trim($_POST['status_id']),
            "brand_id" => trim($_POST['status_id']),
        ];




        $this->mainmodel->createitems($data);





    }




    public function update()
    {
        //  left remark 




        $image = $_FILES['image'];
        $uploaddir = IMG_UPLOAD . "/public/assets/items/";
        $uploadfile = $uploaddir . basename($image['name']);

        move_uploaded_file($image['tmp_name'], $uploadfile);

        $insertimg = "/public/assets/items/" . basename($image['name']);


        $oldimage = $this->mainmodel->image($_POST['productid'])['image'];

        $img = $image['name'] ? $insertimg : $oldimage;


        $data = [
            "productid" => $_POST['productid'],
            "image" => $img,
            "name" => trim($_POST['name']),
            "description" => trim($_POST['description']),
            "price" => trim($_POST['price']),
            "quantity" => trim($_POST['quantity']),
            "discount" => trim($_POST['discount']),

            "category_id" => trim($_POST['category_id']),
            "status_id" => trim($_POST['status_id']),
            "brand_id" => trim($_POST['status_id']),

        ];



        $this->mainmodel->updateitems($data);
        $jsonData = json_encode($data);
        echo $jsonData;

    }


    public function destroy()
    {
        var_dump($_POST['id']);

        $data = [
            'id' => $_POST['id']
        ];

        $this->mainmodel->destroyitem($data);
    }

}



?>