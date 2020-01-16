<?php

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
        default:
            require_once "view/pagenotfound.php";
            break;
    }

?>
<!--
 $tab = json_decode(file_get_contents('Snows.json'), true);
var_dump($tab);
$tab[3]['modele'] = 'New K067'; // update
unset($tab[7]); // delete
$tab[] = ["id" => 11, "modele" => "Carrel", "marque" => "CPNV", "bigimage" => "B101.jpg", "smallimage" => "B101_small.jpg", "dateretour" => "", "disponible" => true];
file_put_contents('Snows.json', json_encode($tab));
 -->