<?php

class User
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function register($userData)
    {
        $this->db->query("INSERT INTO `users`(first_name, last_name, username, password, email, phone, image, user_desc) VALUE(:fname, :lname, :username, :password, :email, :image, :user_desc)");
        $this->db->bind(':fname', $userData['fname']);
        $this->db->bind(':lname', $userData['lname']);
        $this->db->bind(':username', $userData['username']);
        $this->db->bind(':password', $userData['password']);
        $this->db->bind(':email', $userData['email']);
        // $this->db->bind(':image' $userData['image']);
        $this->db->bind(':user_desc', $userData['user_desc']);

        if($this->execute())
            return true;
        else
            return false;
    }

    public function login($email, $password)
    {
        $this->db->query("SELECT * FROM `users` WHERE users.email = :user_email AND users.password = :user_password");

        $this->db->bind(':user_email', $email);
        $this->db->bind(':user_password', $password);

        $row = $this->db->single();

        if($this->db->rowCount() > 0)
        {
            $this->setUserData($row);
            return true;
        }
        else
            return false;
    }

    private function setUserData($row)
    {
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['userId'] = $row->id;
        $_SESSION['username'] = $row->username;
    }

    public function logOut()
    {
        unset($_SESSION['isLoggedIn']);
        unset($_SESSION['userId']);
        unset($_SESSION['username']);
        return true;
    }

    






}

?>