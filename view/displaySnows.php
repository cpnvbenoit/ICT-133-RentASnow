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
<div id="mainSection">
    <?php

    if ($link == '1'){
        include 'page1.php';
    }
    if ($link == '2'){
        include 'page2.php';
    }
    if ($link == '3'){
        include 'page3.php';
    }
    if ($link == '4'){
        include 'page4.php';
    }
    ?>
</div>
<h1>Nos Snowboards :</h1>
<?php foreach ($snows as $onepieceofsnow) { $link=$_GET['link']; ?>
    <hr>
    <div class="case_snow">
        <img src="view/images/Snows/<?= $onepieceofsnow['smallimage'] ?>" alt="">
        <h2>Marque : <?= $onepieceofsnow['marque'] ?></h2>
        <h2>Model : <?= $onepieceofsnow['modele'] ?></h2>
        <a href="index.php?action=displaySnowsPlus" style="text-decoration: underline;color: #4DB9EE">Voir Plus<?php if ($link=='action=displaySnowsPlus'){ $_SESSION['wichsnow']=$onepieceofsnow['id'];} ?></a>
    </div>
<?php } ?>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
