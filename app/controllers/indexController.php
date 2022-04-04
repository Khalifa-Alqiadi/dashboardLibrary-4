<?php

namespace coding\app\controllers;

class IndexController extends Controller{
    function showIndex(){
        $this->viewSite('home');
        
    }
    function list(){
        $this->view('/home');
    }
}
?>