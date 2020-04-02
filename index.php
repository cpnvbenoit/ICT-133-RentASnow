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
if (isset($_GET['id'])){
    $id=$_GET['id'];
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
        case 'succesLogin':
            succesLogin();
            break;
        case 'displaySnowsDetails';
            displaySnowsDetails();
            break;
        case 'displaySnowsTypes';
            displaySnowsTypes($id);
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
