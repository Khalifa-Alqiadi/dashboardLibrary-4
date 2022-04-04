<?php
namespace coding\app\controllers;

use coding\app\models\Model;
class PayementsController extends Controller{

    function createPayment(){
        $this->view('add_payement');
    }
}