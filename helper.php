<?php
/**
 * Helper
 * User: benoit.pierrehumbert
 * Date: 02.04.2020
 * Time: 14.45
 */
function writestatesnow($state)
{
    switch ($state){
        case 1:
            return "Neuf";
            break;
        case 2:
            return "Bon";
            break;
        case 3:
            return "Usagé";
            break;
        case 4:
            return "Mort";
            break;
    }

}
function writeavaliblesnow($state)
{
switch ($state) {
    case 0:
        return "Disponible";
        break;
    case 1:
        return "Indisponible";
        break;
}
}



?>
