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
    $snowstypes = getSnowstypes();
    require_once 'view/displaySnows.php';
}
function connect()
{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    $_SESSION['fail']=4;
    require_once 'view/connect.php';
}
function disconnect()
{
    unset($_SESSION);
    require_once 'view/home.php';
}
function tryLogin()
{
    /*email : elit@Aenean.net
     * password: Holly
     * */
    $users=getUsers();
    $username=$_POST['username'];
    $password=$_POST['password'];
    foreach ($users as $user){
        if (($username==$user['email'])&&(password_verify($password,$user['password']))){

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
function displaySnowsDetails(){
    $snows = getSnows();
    require_once 'view/displaySnowsDetails.php';
}
function modifyfile()
{
    $tab=getUsers();
    require_once 'view/modifyflie.php';
}
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
function updatePass(){
    updatePassword();
    require_once 'view/connect.php';
}
?>
