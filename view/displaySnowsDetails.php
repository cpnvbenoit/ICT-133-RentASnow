<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */

ob_start();
$snow_code=$snow['code'];
$title = "RentASnow - Snows - $snow_code";

?>
    <br><br><br><br><br><br><br>
<div class="center">
    <?php echo "<img src=\"view/images/Snows/". $img."\" style=\"width: 350px\" alt=\"\">";?>
    <h2>Code : <?= $snow['code']?></h2>
    <h2>Longueur : <?= $snow['length']?></h2>
    <h2>Etat : <?= $snow['state']?></h2>
    <h2>Disponibilité : <?= $snow['avalible']?></h2>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>