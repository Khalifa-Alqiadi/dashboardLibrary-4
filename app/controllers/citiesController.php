<?php 
namespace coding\app\controllers;

class CitiesController extends Controller{
    function showSities(){
        $this->view('cities');
    }
    function createCity(){
        $this->view("add_city");
    }
    
}

?>