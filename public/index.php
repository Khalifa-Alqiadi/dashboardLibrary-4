<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\IndexController;
use coding\app\controllers\CategoriesController;
use coding\app\controllers\BookController;
use coding\app\controllers\UsersController;
use coding\app\controllers\AuthorsController;
use coding\app\controllers\PublishersController;
use coding\app\controllers\CitiesController;
use coding\app\controllers\OffersController;
use coding\app\controllers\PayementsController;
use coding\app\controllers\User_PayementController;

use coding\app\system\AppSystem;
use coding\app\system\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);

/** web routes  */


Router::get('/',[IndexController::class,'list']);
Router::get('/home',[IndexController::class,'showIndex']);

Router::get('/add_category',[CategoriesController::class,'create']);
Router::get('/categories',[CategoriesController::class,'showCategories']);

Router::get('/add_book',[BookController::class,'createBook']);
Router::get('/books',[BookController::class,'showBook']);


Router::get('/add_publisher',[PublishersController::class,'create']);
Router::get('/publishers',[PublishersController::class,'showPublishers']);

Router::get('/add_author',[AuthorsController::class,'cearteAuthor']);
Router::get('/authors',[AuthorsController::class,'showAuthor']);
Router::get('/edit_author',[AuthorsController::class,'showAuthorById']);

Router::get('/add_user',[UsersController::class,'createUser']);
Router::get('/users',[UsersController::class,'showUsers']);

Router::get('/add_city',[CitiesController::class,'createCity']);
Router::get('/cities',[CitiesController::class,'showSities']);

Router::get('/add_offers',[OffersController::class,'createOffers']);
Router::get('/offers',[OffersController::class,'showOffers']);

Router::get('/add_payement',[PayementsController::class,'createPayment']);

Router::get('/add_user_payment_methods',[User_PayementController::class,'cerateUserPayement']);
Router::get('/user_payement',[User_PayementController::class,'showMethod']);





/** end of web routes */



$system->start();

