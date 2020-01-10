<?php

require "controler/controler.php";
$action=$_GET['action'];

switch($action){
    case 'home';
        home();
        break;
    case 'displaySnows':
        displaySnows();
        break;
    default:
        require_once "view/home.php";
        break;
}

?>
