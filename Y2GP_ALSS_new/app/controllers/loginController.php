<?php

require_once '../app/core/controller.php';

class loginController extends controller{

    function __construct(){
        parent::__construct();   
    }

    public function index(){
        $this->view->render('loginView');
    }

    public function login(){
        $this->view->render('loginView');
    }

    public function loginSuccess(){
        $username = $_POST ['username'];
        $password=$_POST ['password'];

        $this->loadModel('loginModel');
        $result=$this->view->users = $this->model->readLogin($username, $password);
        $result ? $this->view->render('homeView') : $this->view->render('loginView');
        // if($result){
        //     $this->changeController('homeController');
        //     $this->view->render('homeView');
        // }else{
        //     $this->view->render('loginView');
        // }
    }
}