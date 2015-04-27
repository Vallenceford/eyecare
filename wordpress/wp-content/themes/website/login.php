<?php
/*
Template Name: login
*/
?>



<?php include 'php/header.php'; ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/login.css" type="text/css" />



<p>
    Log hier in om te reageren / je profiel te wijzigen.
</p>

<form action="profiel">
    <input type="text" placeholder="e-mail">
    <input type="password" placeholder="Wachtwoord">
    <input type="submit" value="Inloggen">
    <a href="wachtwoordvergeten">Wachtwoord vergeten</a>
</form>







<?php include 'php/footer.php'; ?>