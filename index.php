<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */
session_start();
require "controler/controler.php";
$action=$_GET['action'];
if (isset($_GET['newusername'])){
    $newusername=$_GET['newusername'];
}

    switch ($action) {
        case 'home';
            home();
            break;
        case 'updatePass';
            updatePass();
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
        case 'changeUser';
            changeUser();
            break;
        case 'delete';
            delete();
            break;
        case '' :
            home();
            break;
        default:
            require_once "view/pagenotfound.php";
            break;
    }
?>
