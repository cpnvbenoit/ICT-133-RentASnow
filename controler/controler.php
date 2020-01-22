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
    require_once 'view/disconnect.php';
}
function tryLogin()
{
    $news = getNews();
    $users=getUsers();
    $username=$_POST['email'];
    $password=$_POST['password'];
    foreach ($users as $user){
        if (($username==$user['username'])&&$password==$user['password']){
            $_SESSION['fail']=false;
            $_SESSION['email']=$username;
            $_SESSION['password']=$password;
            require_once 'view/home.php';
        }else{
            $_SESSION['fail']=true;
            require_once 'view/connect.php';
        }
    }


}
function displaySnowsPlus(){
    $snows = getSnows();
    require_once 'view/displaySnowsPlus.php';
}
?>
