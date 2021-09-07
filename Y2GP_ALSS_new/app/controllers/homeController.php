<?php

require_once '../app/core/controller.php';



class homeController extends controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        echo 'I am home';
    }

    public function home(){
        $this->loadModel('homeModel');
        $this->view->users = $this->model->readTable();
        $this->view->render('homeView');
    }

    public function login(){
        $this->view->render('loginView');
    }

    public function loginSuccess(){
        $username = $_POST ['username'];
        $password=$_POST ['password'];

        $this->loadModel('loginModel');
        $result=$this->view->users = $this->model->readLogin($username, $password);
        $result ? $this->view->render('userView') : $this->view->render('loginView');
    }
    // view profile resident
    public function viewProfile(){
        $this->loadModel('profileModel');
        $this->view->users = $this->model->readTable();
        $this->view->render('profileView');
    }

    public function test(){
        $this->view->render('testView');
    }
    
}