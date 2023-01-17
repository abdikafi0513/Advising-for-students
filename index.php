<?php
//Turn on error reporting
ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
//Require the autoload file
require_once('vendor/autoload.php');
//Create an instance of the Base class
$f3 = Base::instance();
//Define a default route
$f3->route('GET /', function () {
    echo '<h1>advising page!</h1>';
    $view = new Template();
    echo $view->render('views/home.html');

});
//Define a default route
$f3->route('GET /planning', function () {
    $view = new Template();
    echo $view->render('views/planning.php');


}
);
//Run fat free
$f3->run();
//send output to the browser