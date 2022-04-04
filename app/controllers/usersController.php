<?php 
namespace coding\app\controllers;


class UsersController extends Controller{
    function showUsers(){
        $this->view('users');
    }
    function createUser(){
        $this->view("add_user");
    }
}

?>