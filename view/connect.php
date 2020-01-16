<?php
ob_start();
$title = "RentASnow - Connect";
?>
<form action="submit">
    <label for="email">Email</label>
    <input id="email" type="text" placeholder="Entrer votre E-mail ici...">
    <label for="password">Mot de passe</label>
    <input id="password" type="text" placeholder="Entrer votre mot de passe ici...">
    <button >Se connecter</button>
</form>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
