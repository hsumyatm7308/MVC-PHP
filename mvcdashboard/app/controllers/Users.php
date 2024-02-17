<?php

class Users extends Controller
{


    protected $usermodel;

    public function __construct()
    {
        $this->usermodel = $this->model('User');
    }

    public function register()
    {
        $data = [];

        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                "fullname" => trim($_POST['fullname']),
                "email" => trim($_POST['email']),
                "password" => trim($_POST['password']),
                "comfirmpassword" => trim($_POST['comfirmpassword']),
                "fullnameerr" => '',
                "emailerr" => '',
                "passworderr" => '',
                'comfirmpassworderr' => ''

            ];



            if (empty($data['fullname'])) {
                $data['fullnameerr'] = "Please enter full name";
            }

            if (empty($data['email'])) {
                $data['emailerr'] = "Please enter email";
            } else {
                // check email exits or not 
                if ($this->usermodel->registeremailcheck($data['email'])) {
                    $data['emailerr'] = "Email already exits";
                }

            }

            if (empty($data['password'])) {
                $data['passworderr'] = "Please enter password";
            }

            if (empty($data['comfirmpassword'])) {
                $data['comfirmpassworderr'] = "Please enter comfirm password";
            } else {
                if ($data['password'] != $data['comfirmpassword']) {
                    $data['comfirmpassworderr'] = "Password doesn't match";
                }
            }


            if (!empty($data['fullname']) && !empty($data['email']) && !empty($data['password']) && !empty($data['comfirmpassword'])) {

                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                if ($this->usermodel->register($data)) {

                    $redirect = URLROOT . '/users/login';
                    header('location:' . $redirect);

                } else {
                    die('Something Wrong');
                }

            } else {


                $this->view('users/register', $data);

            }






        } else {
            $data = [
                "fullname" => '',
                "email" => '',
                "password" => '',
                "comfirmpassword" => '',
                "fullnameerr" => '',
                "emailerr" => '',
                "passworderr" => '',
                'comfirmpassworderr' => ''

            ];
        }

        $this->view('users/register', $data);

    }

    public function login()
    {
        $this->view('users/login');

    }


}


?>