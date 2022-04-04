<?php

namespace coding\app\controllers;

class AuthorsController extends Controller{

    function showAuthor(){
        $this->view('authors');
    }
    function showAuthorById(){
        $this->view('edit_author');
    }

    function cearteAuthor(){
        $this->view('add_author');

    }
}

?>