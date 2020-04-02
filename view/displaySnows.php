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
<br><br><br><br><br><br><br>
<h1>Nos Snowboards :</h1>
<?php foreach ($snowstypes as $snowstype) { ?>

    <div class="case_snow col-4" style="text-align: center">
        <a href="index.php?action=displaySnowsTypes&id=<?= $snowstype['id'] ?>"
           style="cursor: pointer;text-decoration: underline;color: #4DB9EE"><span style="font-size: 1.5em">
        <img src="view/images/Snows/<?= $snowstype['photo'] ?>" style="width: 100px;"
             alt="<?= $snowstype['model'] ?>"><br>
        <?= $snowstype['model'], $snowstype['brand'] ?></span>
        </a>
    </div>
    <hr>

<?php } ?>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
