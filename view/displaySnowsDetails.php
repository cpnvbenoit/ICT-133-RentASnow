<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */

ob_start();
$title = "RentASnow - Snows";
$compteur=0;
?>
    <br><br><br><br><br><br><br>

<?php foreach ($snows as $snow) { ?>
    <?php if ($compteur==0){echo "<img src=\"view/images/Snows/". $snow['photo']."\" style=\"width: 150px\" alt=\"\">";$compteur++;
    echo"<h2>Marque : ".$snow['brand']."</h2>
    <h2>Model : ". $snow['model']. "</h2>";} ?>
    <?php if ($snow['id']==$_GET['id']){ ?>
        <div class="case_snow">


            <h2>Diponibilité : <?php $dispo=$snow['disponible']; if($dispo==true){echo"Disponible";}else{echo"Indisponible";}?></h2>
            <br>
            <h2>Date de remise en stock : <?php $instock=$snow['dateretour']; if($instock!=""){echo"Le produit sera de nouveau disponible le : ".$snow['dateretour'];}else{echo"Date de réaprovisionnement inconnue";}?></h2>
        </div>
    <?php } ?>
<?php } ?>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>