<?php

//this is my controller for the pets-oop project
ini_set('display_errors',1);
error_reporting(E_ALL);

//Start a session
session_start();

//require autoload file
require_once('vendor/autoload.php');

//instantiate fat-free
$f3 = Base::instance();

//define default route
$f3->route('GET /', function(){
    echo "<h1>Hello, pets!</h1>";
});


//Run Fat-Free
$f3->run();