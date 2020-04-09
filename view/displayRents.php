<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */

ob_start();
$title = "RentASnow - Rents";
?>

<br><br><br><br><br><br><br>
<h1>Vos commandes :</h1>
<?php var_dump($rents); foreach ($rents as $rent) {if ($rent['id']!=null){
    if ($rent['status']=="ouvert"){?>
        <div class="case_snow col-4 center">

        </div>
        <hr>
<?php }?>
<?php if ($rent['status']=="fermé"){?>
        <div class="case_snow col-4 center">

        </div>
        <hr>
<?php }?>


<?php } }?>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
