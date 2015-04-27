<?php
/*
Template Name: veranderaccount
*/
?>

<?php include 'php/header.php'; ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/login.css" type="text/css" />




<p>
    wijzig profiel
</p>

<form action="login.php">
    <input type="text" placeholder="Gebruikersnaam">
    <input type="text" placeholder="E-mail">
    <input type="password" placeholder="Wachtwoord">
    <input type="password" placeholder="Wachtwoord nogmaals">
    wijzig profiel foto
    <input type="file" value="img" placeholder="lol">
    <input type="submit" value="klaar">
    
</form>







<?php include 'php/footer.php'; ?>