<?php

namespace coding\app\controllers;


class PublishersController extends Controller{

    function showPublishers(){
        $this->view('publishers');
    }
    function create(){
        $this->view('add_publisher');

    }
}

?>