<?php
namespace coding\app\controllers;

use coding\app\system\AppSystem;
use coding\app\system\Request;
use coding\app\system\Router;

class Controller{

   function view($viewName,$params=null){
       AppSystem::$appSystem->router->view($viewName,$params);
   }
   function viewSite($viewName, $params=null){
       AppSystem::$appSystem->router->viewSite($viewName, $params);
   }
   
}
?>