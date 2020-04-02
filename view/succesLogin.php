<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */

ob_start();
$title = "RentASnow - Conexion";

?>
<script></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>