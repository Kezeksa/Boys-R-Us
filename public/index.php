<?php
// loading autoload and connect to db
require "../vendor/autoload.php";
require '../connect.php';

// session starting for dynamic everywhere you want message
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// routeur
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
} else {
    $route = 'home'; // go to home by default
}

if ($route == 'home') {
    $homeController = new \Boysrus\Controller\HomeController();
    echo $homeController->showHome();

} elseif ($route == 'childhome') {
    $childController = new \Boysrus\Controller\ChildController();
    echo $childController->createNewAccount();

} elseif ($route == 'childlogged') {
    // models of one category
    $modelController = new \Boysrus\Controller\ChildController();
    echo $modelController->chooseGift();

} elseif ($route == 'elfhome') {
    // go to contact page
    $homeController = new \Boysrus\Controller\ElfController();
    echo $homeController->showChildren();

} elseif ($route == 'childorder') {
    // go to contact page
    $homeController = new \Boysrus\Controller\ElfController();
    echo $homeController->showorder();

} elseif ($route == 'santahome') {
    // go to mentions page
    $homeController = new \Boysrus\Controller\SantaController();
    echo $homeController->showcountries();

} elseif ($route == 'santacities') {
    $modelController = new \Boysrus\Controller\SantaController();
    echo $modelController->showcities();

} elseif ($route == 'santafinalorders') {
    $modelController = new \Boysrus\Controller\SantaController();
    echo $modelController->showordersbycity();

} else {
    // go to homepage by default
    $homeController = new \Boysrus\Controller\HomeController();
    echo $homeController->showHome();
}

?>

