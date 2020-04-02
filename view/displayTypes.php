<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */

require_once 'helper.php';
ob_start();
$title = "RentASnow - Types : ";
?>
<br><br><br><br><br><br><br>
<div>
    <?php echo "<img src=\"view/images/Snows/". $snowtype['photo']."\" style=\"width: 150px\" alt=\"\">";?>
    <table border="1" class="center">
        <thead>
            <th>Code</th>
            <th>Longueur</th>
            <th>Etat</th>
            <th>Disponibilité</th>
        </thead>
        <tbody>
            <?php foreach ($snows as $snow) { ?>
                <tr>
                    <td>
                       <?= $snow['code'] ?>
                    </td>
                    <td>
                       <?= $snow['length'] ?>
                    </td>
                    <td>
                        <?= writestatesnow($snow['state']); ?>
                    </td>
                    <td>
                        <?= writeavaliblesnow($snow['state']); ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
