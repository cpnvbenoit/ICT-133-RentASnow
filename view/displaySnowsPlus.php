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
<?php foreach ($snows as $onepieceofsnow) { ?>
    <?php if ($onepieceofsnow['id']==$_GET['id']){ ?>
        <div class="case_snow">
            <img src="view/images/Snows/<?= $onepieceofsnow['bigimage'] ?>" alt="">
            <h2>Marque : <?= $onepieceofsnow['marque'] ?></h2>
            <h2>Model : <?= $onepieceofsnow['modele'] ?></h2>
            <h2>Diponibilité : <?php $dispo=$onepieceofsnow['disponible']; if($dispo==true){echo"Disponible";}else{echo"Indisponible";}?></h2>
            <br>
            <h2>Date de remise en stock : <?php $instock=$onepieceofsnow['dateretour']; if($instock!=""){echo"Le produit sera de nouveau disponible le : ".$onepieceofsnow['dateretour'];}else{echo"Date de réaprovisionnement inconnue";}?></h2>
        </div>
    <?php } ?>
<?php } ?>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>