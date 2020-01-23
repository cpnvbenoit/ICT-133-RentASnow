<?php
ob_start();
$title = "RentASnow - Edit File";
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 23.01.2020
 * Time: 11:37
 */ ?>
<!--
 $tab = json_decode(file_get_contents('Snows.json'), true);
var_dump($tab);
$tab[3]['modele'] = 'New K067'; // update
unset($tab[7]); // delete
$tab[] = ["id" => 11, "modele" => "Carrel", "marque" => "CPNV", "bigimage" => "B101.jpg", "smallimage" => "B101_small.jpg", "dateretour" => "", "disponible" => true];
file_put_contents('Snows.json', json_encode($tab));
 -->
<?php
$num = count(glob("../model/dataStorage/" . "*"));
echo $num;
?>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
