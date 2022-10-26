<?php

require_once '../app/core/controller.php';

class homeController extends controller{

    function __construct(){
        parent::__construct();   
    }

    public function index(){
        $this->view->render('loginView');
    }

    public function login(){
        $this->loadModel('loginModel');
        // $this->view->users = $this->model->readTable();
        // print_r($users);
        $this->view->render('loginView');
    }
    
}