<?php
@session_start();

class IndexController
{
    public function __construct()
    {
        @session_start();
        $this->view = new View();
    }
   
    public function index()
    {
        $this->view->show("index.php");
    }

    public function login()
    {
        
            $Password = $_POST['password'];
            $User     = $_POST['email'];
            if (isset($Password) && isset($User)) {
                  $_SESSION['nombre']       =$User;
                  
            }

      header('location:index.php');

       
    }

    public function logout()
    {
        if ($_SESSION) {
             unset($_SESSION);
            session_destroy();
        }

        header('location:index.php');

    }

}
