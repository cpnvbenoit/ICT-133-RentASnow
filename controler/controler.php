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
?>
