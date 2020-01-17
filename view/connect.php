<?php
ob_start();
$title = "RentASnow - Connect";
?>
<div >
<form style="margin-top: 150px" action="submit">
    <table class="table">
        <tr>
            <td><label for="email">Email : </label></td>
            <td><input id="email" type="text" placeholder="Entrer votre E-mail ici..."></td>
        </tr>
        <tr>
            <td><label for="password">Mot de passe : </label></td>
            <td><input id="password" type="text" placeholder="Entrer votre mot de passe ici..."></td>
        </tr>
        <tr>
            <td colspan="2"><button >Se connecter</button></td>
            
        </tr>
    </table>
</form>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
