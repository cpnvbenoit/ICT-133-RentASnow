<?php
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
    <?php if ($onepieceofsnow['id']==$_SESSION['wichsnow']){ ?>
        <div class="case_snow">
            <h2>ID : <?= $onepieceofsnow['id'] ?></h2>
            <img src="view/images/Snows/<?= $onepieceofsnow['bigimage'] ?>" alt="">
            <h2>Marque : <?= $onepieceofsnow['marque'] ?></h2>
            <h2>Model : <?= $onepieceofsnow['modele'] ?></h2>
            <h2>Diponibilité : <?php $dispo=$onepieceofsnow['disponible']; if($dispo==true){echo"Disponible";}else{echo"Indisponible";}?></h2>
        </div>
    <?php } ?>
<?php } ?>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>