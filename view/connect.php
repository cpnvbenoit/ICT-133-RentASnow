<?php
ob_start();
$title = "RentASnow - Connect";
?>

<div style="margin-top: 100px">
    <?php
    if ($_SESSION['fail']==true){
        echo "<h4 class=\"text-danger\" >Votre identifiant ou votre mot de passe est incorrect !</h4>";
    }
    ?>
    <form style="margin-top: 50px" method="post" action="index.php?action=tryLogin">
    <table class="table">
        <tr>
            <td><label for="email">Email : </label></td>
            <td><input id="email" name="email" type="text" placeholder="Entrer votre E-mail ici..."></td>
        </tr>
        <tr>
            <td><label for="password">Mot de passe : </label></td>
            <td><input id="password" name="password" type="password" placeholder="Entrer votre mot de passe ici..."></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Se connecter</button></td>
        </tr>
    </table>
</form>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
