<?php
/*
Template Name: aanmelden
*/
?>


<?php include 'php/header.php'; ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/login.css" type="text/css" />




<p>
    Meld je hier aan om te kunnen reageren op het forum.
</p>

<form action="login">
    <input type="text" placeholder="Gebruikersnaam">
    <input type="text" placeholder="E-mail">
    <input type="password" placeholder="Wachtwoord">
    <input type="submit" value="Aanmelden">
    <a href="login">Ik heb al een account</a>
</form>








<?php include 'php/footer.php'; ?>