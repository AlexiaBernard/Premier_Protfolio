<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="non_informatiques.css">
    <link rel="stylesheet" type="text/css" href="../menu.css">
    <link rel="stylesheet" type="text/css" href="../footer.css">
    <link rel="stylesheet" type="text/css" href="../icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head> 
<body >
	<nav>
  <ul>
    <?php
      include "../templates/accueil.php";
      include "../templates/cv.php";
    ?>
    <li class="deroulant"><a href="realisations.php" class="click">Réalisations &ensp;</a>
      <ul class="sous">
        <li><a href="java.php">Java</a></li>
        <li><a href="code.php">C</a></li>
        <li><a href="web.php">Web</a></li>
        <li><a href="non_informatiques.php" class="click">Non Informatiques</a></li>
      </ul>
    </li>
    <?php
      include "../templates/exp.php";
      include "../templates/competences.php";
      include "../templates/contact.php";
    ?>
  </ul>
  </nav>
  <div class="conteneur">
	<p><br><br><br> 
    Durant le premier confinement de l'année 2020 (suite au Corona Virus), j'ai composé une petite musique de 1min26. <br> J'ai utilisé comme outil le site internet <a href="https://soundation.com/auth?tab=sign_in" target="_blank">Soudation Studio</a>. <br> <br> La voici </p>  
  <audio controls>
    <source src="musique.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
  </audio><br><br>
  <p> Vous pouvez voir ci-dessous les captures d'écran de mon arrangement.<br>J'ai pris des samples qui étaient déjà sur le site et je les ai arrangés pour faire ce que vous venez d'écouter. <br> En y ajoutant quelques effets et en équilibrant le volume des différentes "Audio Channel" par exemple.</p><br><br>
    <img src="premiere.jpg" style="width:70%;" alt="soundation studio">
  <img src="deuxieme.jpg" style="width:70%;" alt="soundation studio"> <br>
    
  
</div>

<?php
  include "../templates/buttons.php";
  include "../templates/footer.php";
?>