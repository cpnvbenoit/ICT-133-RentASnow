<?php
session_start();
require "controler/controler.php";
$action=$_GET['action'];


    switch ($action) {
        case 'home';
            home();
            break;
        case 'displaySnows':
            displaySnows();
            break;
        case 'connect':
            connect();
            break;
        case 'disconnect':
            disconnect();
            break;
        case 'tryLogin':
            tryLogin();
            break;
        case 'displaySnowsPlus';
            displaySnowsPlus();
            break;
        case 'modifyflie';
            modifyfile();
            break;
        case '' :
            home();
            break;
        default:
            require_once "view/pagenotfound.php";
            break;
    }
?>
