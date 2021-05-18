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

    //instantiate a pet object
    $pet1 = new Pet("Spot", "White");

    //test getter and setter
    $pet1->setName("Fido");
    echo "My pet's name is " . $pet1->getName() . "<br>";

    //invoke eat method
    $pet1->eat();
    $pet1->talk();
    $pet1->sleep();

    $dog1 = new Dog("Riley", "brown");

    //var_dump($dog1);
    $dog1->fetch();
    $dog1->eat();

    $cat1 = new Cat("Thurston", "gray");

    $cat1->scratch();
    $cat1->sleep();

});


//Run Fat-Free
$f3->run();