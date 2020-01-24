<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */

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
    $tab=getUsers();
    require_once 'view/modifyflie.php';
}
/*
$tab = json_decode(file_get_contents('Snows.json'), true);
var_dump($tab);
$tab[3]['modele'] = 'New K067'; // update
unset($tab[7]); // delete
$tab[] = ["id" => 11, "modele" => "Carrel", "marque" => "CPNV", "bigimage" => "B101.jpg", "smallimage" => "B101_small.jpg", "dateretour" => "", "disponible" => true];
file_put_contents('Snows.json', json_encode($tab));


*/
function changeUser()
{
    $id=$_GET['id'];
    $modify = getUsers();
    $modify[$id-1]['username'] = $_POST['newusername']; // update
    putUsers($modify);
    $tab = getUsers();
    require_once 'view/modifyflie.php';
}
function delete(){
    $id=$_GET['id'];
    $modify = getUsers();
    unset($modify[$id-1]);
    putUsers($modify);
    require_once 'view/userdeleted.php';
}
?>
