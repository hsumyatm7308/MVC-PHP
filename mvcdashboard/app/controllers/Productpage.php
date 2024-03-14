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

        $post_data = json_decode($_POST['datas'], true);










        if ($post_data !== null) {
            $name = $post_data['name'];
            $description = $post_data['description'];
            $image = $post_data['image'];
            $price = $post_data['price'];
            $discount = $post_data['discount'];
            $quantity = $post_data['quantity'];
            $status_id = 1;
            $category_id = 1;
            $brand_id = 1;

            $data = [
                "image" => $image,
                "name" => $name,
                "price" => $price,
                "description" => $description,
                "quantity" => $quantity,
                "discount" => $discount,
                "status_id" => $status_id,
                "category_id" => $category_id,
                "brand_id" => $brand_id
            ];





            $this->mainmodel->createitems($data);



        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Invalid JSON data'));
        }




    }


}



?>