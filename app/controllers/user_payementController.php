<?php
namespace coding\app\controllers;
class User_PayementController extends Controller{
    function showMethod(){
        $this->view('user_payement');
    }
    function cerateUserPayement(){
        $this->view('add_user_payment_methods');
        
    }
    
}
?>