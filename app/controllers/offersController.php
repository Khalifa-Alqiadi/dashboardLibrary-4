<?php
namespace coding\app\controllers;

class OffersController extends Controller{
    function showOffers(){
        $this->view('offers');
    }
    function createOffers(){
        $this->view("add_offers");
    }
}
?>