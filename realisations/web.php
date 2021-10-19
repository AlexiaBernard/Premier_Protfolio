<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="web.css">
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
	<p class="entete"><br><br><br>Cette page est dédiée à mes réalisations informatiques en Web, avec des explications, captures d'écran et lien de ces réalisations. </p><br>

  <p class="indent">
    <strong>Juin 2020 </strong>:  Ce projet était en binôme et j'ai une nouvelle fois fait équipe avec 
    <a href="https://dwarves.iut-fbleau.fr/~cunsolo/WIM/Portfolio/" target="_blank" class="onglets">Florian CUNSOLO</a>, durant notre première année de DUT Informatique. Le projet qui nous a été donné 
    est la réalisation d’un site internet "Doodle", afin d'aider les utilisateurs à organiser des
     réunions en ligne. Pour cela, nous avons utilisé du HTML, CSS, du PHP ainsi que CodeIgniter. <br>
     J'ai apprécié faire ce projet qui nous a quand même donné du fil à retordre et qui nous a permis
     d'apprendre à utiliser CodeIgniter. 
     Vous pouvez trouver le code ci-dessous en cliquant sur "lien".
      Je vous propose donc maintenant de cliquer sur le bouton "Doodle" afin de voir ce que nous avons 
      réalisé. <br>
      Voici une capture d'écran de notre menu connecté, c'est à dire lorsque l'utilisateur a 
      réussi à se connecter.<br>
    <strong><a class="onglets" href="https://dwarves.iut-fbleau.fr/git/bernardal/PROJET_PHP_2.1/src/master/Projet" target="_blank">lien</a></strong>   ou   <strong><a class="onglets" href="https://dwarves.iut-fbleau.fr/~cunsolo/WIM/Projet/" target="_blank">Doodle</a></strong>
</p><br>
  <img src="../photos/doodle.png" class="doodle" alt="fenetre menu connecté">
    <br><br><br>

  <p class="indent">
    <strong>11 Janvier 2020 </strong>:  J'ai créé, ce jour, mon Portfolio sur lequel vous vous trouvez
     actuellement. C'est pourquoi je ne vais pas mettre de photo du résultat de ce travail mais
      plutôt vous inviter à finir de le parcourir. Vous pouvez trouver ci-joint le code qui m'a été 
      indispensable à cette réalisation. J'ai fait cette réalisation grâce à du HTML et du CSS.<br>
    <strong><a class="onglets" href="https://dwarves.iut-fbleau.fr/git/bernardal/projetwims1_bernardal.git" target="_blank">lien</a></strong>
  </p><br><br>
<br>
</div>

<?php
  include "../templates/buttons.php";
  include "../templates/footer.php";
?>