<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */

function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}
function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"),true);
}
function getUsers()
{
    return json_decode(file_get_contents("model/dataStorage/users.json"),true);
}
function putUsers($tab)
{
    file_put_contents('model/dataStorage/users.json', json_encode($tab));
}
?>
