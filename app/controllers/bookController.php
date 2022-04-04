<?php

namespace coding\app\controllers;
class BookController extends Controller{
    function showBook(){
        $this->view('books');
    }

    function createBook(){
        $this->view('add_book');
    }
}

?>