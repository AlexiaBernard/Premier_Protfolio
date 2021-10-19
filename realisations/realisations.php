<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="realisations.css">
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
        <li><a href="non_informatiques.php">Non Informatiques</a></li>
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
	<p><br><br><br><br><br><br><br></p>
  <h2 class="Rea">
    <a >Mes réalisations Informatiques :</a><br>
    <a href="java.php" class="aze">Java</a><br>
    <a href="code.php" class="aze">C</a><br>
    <a href="web.php" class="aze">Web</a><br><br>
    <a href="non_informatiques.php" class="aze" >Mes réalisations non Informatiques</a>
  </h2>
</div>

<?php
  include "../templates/buttons.php";
  include "../templates/footer.php";
?>