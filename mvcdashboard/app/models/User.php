<?php

class User
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function register($data)
    {
        $this->db->dbquery('INSERT INTO users ( fullname,email,password) VALUES (:fullname,:email,:password)');
        $this->db->dbbind(':fullname', $data['fullname']);
        $this->db->dbbind(':email', $data['email']);
        $this->db->dbbind(':password', $data['password']);

        if ($this->db->dbexecute()) {
            return true;
        } else {
            return false;
        }
    }


    public function registeremailcheck($email)
    {


        $this->db->dbquery('SELECT email FROM users WHERE email = :email ');
        $this->db->dbbind(':email', $email);
        $this->db->getsingledata();

        if ($this->db->rowcount() > 0) {
            return true;
        } else {
            return false;
        }

    }
}


?>