<?php
ob_start();
$title = "RentASnow - Snows";
?>

<!-- ________ SLIDER_____________-->
<div class="row-fluid">
    <div class="camera_full_width">
        <div id="camera_wrap">
            <div data-src="view/images/slider/5.jpg">
                <div class="camera_caption fadeFromBottom cap1">Les derniers modèles toujours à disposition.</div>
            </div>
            <div data-src="view/images/slider/1.jpg">
                <div class="camera_caption fadeFromBottom cap2">Découvrez des paysages fabuleux avec des sensations.</div>
            </div>
            <div data-src="view/images/slider/2.jpg"></div>
        </div>
        <br style="clear:both"/>
    </div>
</div>
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
<h1>Nos Snowboards :</h1>
<?php foreach ($snows as $onepieceofsnow) { ?>
    <hr>
    <div class="case_snow">
        <img src="view/images/Snows/<?= $onepieceofsnow['smallimage'] ?>" alt="">
        <h2>Marque : <?= $onepieceofsnow['marque'] ?></h2>
        <h2>Model : <?= $onepieceofsnow['modele'] ?></h2>
        <h2>Diponibilité : <?php $dispo=$onepieceofsnow['disponible']; if($dispo==true){echo"Disponible";}else{echo"Indisponible";}?></h2>
    </div>
<?php } ?>

<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
