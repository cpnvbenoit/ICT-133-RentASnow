<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */

ob_start();
$title = "RentASnow - Snows";
?>

<!--
   {
	"id" : "1".
    "modele": "B101",
    "marque": "Burton",
    "bigimage": "B101.jpg",
    "smallimage": "B101_small.jpg",
    "dateretour": "",
    "disponible": true
  },
 -->

<?php foreach ($snows as $onepieceofsnow) { $link=$_GET['link']; ?>
    <?php if ($onepieceofsnow['id']==1){echo "<h1>Nos Snowboards :</h1>";} ?>
    <div class="case_snow">
        <img src="view/images/Snows/<?= $onepieceofsnow['photo'] ?>" alt="">
        <h2>Marque : <?= $onepieceofsnow['brand'] ?></h2>
        <h2>Model : <?= $onepieceofsnow['model'] ?></h2>
        <h2>Longueur : <?= $onepieceofsnow['length'] ?></h2>
        <h2>Code : <?= $onepieceofsnow['code'] ?></h2>
        <a href="index.php?action=displaySnowsPlus&id=<?= $onepieceofsnow['id']?>" style="cursor: crosshair;text-decoration: underline;color: #4DB9EE">Voir Plus</a>
    </div>
    <hr>
<?php } ?>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
