<?php
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}
function displaySnows()
{
    $snows = getSnows();
    require_once 'view/displaySnows.php';
}
function connect()
{
    require_once 'view/connect.php';
}
function disconnect()
{
    unset($_SESSION);
    require_once 'view/home.php';
}
function tryLogin()
{
    $news = getNews();
    $users=getUsers();
    $username=$_POST['username'];
    $password=$_POST['password'];
    foreach ($users as $user){
        if (($username==$user['username'])&&($password==$user['password'])){

            $_SESSION['username']=$username;
        }
    }
    if (isset($_SESSION['username'])==false){
        $_SESSION['fail']=true;
        require_once 'view/connect.php';
    }else{
        $_SESSION['fail']=false;
        require_once 'view/home.php';
    }


}
function displaySnowsPlus(){
    $snows = getSnows();
    require_once 'view/displaySnowsPlus.php';
}
function modifyfile()
{
    require_once 'view/modifyflie.php';
}
?>
