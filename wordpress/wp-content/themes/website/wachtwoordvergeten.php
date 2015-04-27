<?php
/*
Template Name:wachtwoordvergeten
*/
?>

<?php include 'php/header.php'; ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/login.css" type="text/css" />


<p>
    voer je gegevens in
</p>

<form action="?">
    <input type="text" placeholder="Gebruikersnaam">
    <input type="text" placeholder="E-mail">
    <input type="submit" value="Stuur email">
</form>







<?php include 'php/footer.php'; ?>