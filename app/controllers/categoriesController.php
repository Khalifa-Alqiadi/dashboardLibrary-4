<?php

namespace coding\app\controllers;
class CategoriesController extends Controller{

    function showCategories(){

        $this->view('categories');

    }
    function create(){
        $this->view('add_category');

    }
}

?>