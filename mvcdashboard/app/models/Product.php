<?php

class Product
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function index()
    {
        $this->db->dbquery('SELECT * FROM items');
        $this->db->dbexecute();

        return $this->db->getmultidata();
    }

    public function createitems($data)
    {

        try {


            $image = $data['image'];
            $name = $data['name'];
            $price = $data['price'];
            $description = $data['description'];
            $category_id = $data['category_id'];
            $status_id = $data['status_id'];
            $brand_id = $data['brand_id'];


            $this->db->dbquery("INSERT INTO items(image,name,price,description,category_id,status_id,brand_id) VALUES(:image,:name,:price,:description,:category,:status,:brand)");
            $this->db->dbbind(":image", $image);
            $this->db->dbbind(":name", $name);
            $this->db->dbbind(":price", $price);
            $this->db->dbbind(":description", $description);
            $this->db->dbbind(":category", $category_id);
            $this->db->dbbind(":status", $status_id);
            $this->db->dbbind(":brand", $brand_id);

            $this->db->dbexecute();



            redirect("productpage/index");


        } catch (Exception $e) {
            echo $e->getMessage();
        }



    }

}


?>