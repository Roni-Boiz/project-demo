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
        // print_r($users);
        $this->view->render('homeView');
    }

    public function login(){
        // $this->model('homeModel');
        $this->view->users = $this->model->readTable();
        // // print_r($users);
        $this->view->render('loginView');
    }

    public function loginSuccess(){
        // $this->model('homeModel');
        // $this->view->users = $this->model->readTable();
        // // print_r($users);
        $this->view->render('loginView');
    }
    
}