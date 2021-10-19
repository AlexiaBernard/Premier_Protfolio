<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" type="text/css" href="../menu.css">
    <link rel="stylesheet" type="text/css" href="../footer.css">
    <link rel="stylesheet" type="text/css" href="../icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head> 
<body>
	<nav>
  <ul>
    <?php
      include "../templates/accueil.php";
      include "../templates/cv.php";
      include "../templates/realisations.php";
      include "../templates/exp.php";
      include "../templates/competences.php";
    ?>
    <li><a href="contact.php" class="click">Contact</a></li>
  </ul>
  </nav>
  <div class="conteneur">
    
	<br><br><br>
  <p class="intro">Sur cette page vous pouvez entrer vos coordonnées dans le formulaire ci-dessous et m'envoyer un mail. Vous trouverez en bas de cette page mes coordonnées.<br><br><br></p>

  <form method="POST" action="https://formspree.io/f/mvovyjyb">
    <div class="un">
      <input class="bouton" type="radio" name="civilite" id="femme" value="Madame" required>
      <label  for="femme">Madame </label>
      <input class="bouton" type="radio" name="civilite" id="homme" value="Monsieur" required>
      <label  for="homme">Monsieur </label>
    </div><br>
    <table>
        <tr>
            <td class="label">Nom</td>
            <td class="input"><input type="text" name="name" id="name" placeholder="BERNARD" required></td>
        </tr>
        <tr>
            <td class="label">Prénom </td>
            <td class="input"><input type="text" name="firstname" id="firstname" placeholder="Aléxia" required></td>
        </tr>
        <tr>
            <td class="label">Adresse mail</td>
            <td class="input"><input type="email" name="email" id="email" placeholder="exemple@gmail.com" required></td>
        </tr>

         <tr>
            <td class="label">Objet</td>
            <td class="input"><input type="text" name="object" id="object" placeholder="Objet" required></td>
        </tr>

        <tr>
            <td class="label">Message</td>
            <td class="input"> <textarea name="message" id="message" placeholder="Message" required></textarea></td>
        </tr>
    </table><br>
    <div class="un">
      <input type="submit" class="bouton" id="envoyer" value="Envoyer">
      <input type="reset" class="bouton" value="Remettre à zéro">
  </div>
</form><br><br><br>
  <p class="coordonnees1">
    <i class="material-icons">mail_outline</i> alexiabernard25@gmail.com</p>
  <p class="coordonnees2">
    <i class="material-icons">phone_android</i> 06 95 24 68 50<br><br><br>
  </p></div>

<?php
  include "../templates/buttons.php";
  include "../templates/footer.php";
?>