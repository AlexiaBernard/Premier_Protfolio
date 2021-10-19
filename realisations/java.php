<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="java1.css">
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
        <li><a href="java.php" class="click">Java</a></li>
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
  <p class="entete"><br><br><br>Cette page est dédiée à mes réalisations informatiques en Java, avec des explications, captures d'écran et lien de ces réalisations. </p><br>

  <p class="indent">
    <strong>06 Avril 2020 </strong>:  Ce projet était en binôme et j'ai une nouvelle fois fait équipe avec <a href="https://dwarves.iut-fbleau.fr/~cunsolo/WIM/Portfolio/" target="_blank" class="onglets">Florian CUNSOLO</a>, durant notre première année de DUT Informatique. Le projet qui nous a été donné est la réalisation d’un jeu «SameGame», consistant à vider une grille, contenant trois types différents de blocs, en combinant les blocs identiques positionnés les uns à côté des autres afin de marquer le meilleur score possible. Pour cela, nous avons utilisé du Java ainsi que l’API standard Java Vous pouvez trouver le code ci-dessous en cliquant sur "lien". Ci-dessous se trouve également des captures d'écran, avec explications de notre jeu <br>
    <strong><a class="onglets" href="https://dwarves.iut-fbleau.fr/git/bernardal/PT21_APL2020/src/master/Projet" target="_blank">lien</a></strong>
  </p><br><br>
  <img src="../photos/samegame1.png" class="blocus" alt="fenetre menu">
  <img src="../photos/samegame2.png" class="blocus" id="photog" alt="fenetre menu">
  <p class="indent">Dans ces deux premières captures d'écran nous pouvons voir le menu de notre jeu SameGame. Dans celle de gauche avec le mode sombre et dans celle de droite le mode clair. Nous voyons en haut le titre de notre jeu. Ensuite nous avons divisé notre fenêtre en deux : une partie pour expliquer les règles et l'autre pour expliquer comment est calculé le score. En bas de la fenêtre deux boutons sont disponibles : le premier "Fichier" lance une partie à partie d'un fichier sélectionné par le joueur; le second "Joueur" lance une partie aléatoire. </p>
  <img src="../photos/samegame3.png" class="blocus" alt="fenetre jeux">
  <img src="../photos/samegame4.png" class="blocus" id="photog" alt="fenetre jeux">
  <p class="indent">Dans ces deux captures d'écran nous pouvons observer la fenêtre de jeu avec deux parties différentes en cours. Si nous regardons d'abord le haut nous pouvons voir cinq étoiles (grises pour le moment) qui permettent au joueur de se fixer un défi car en augmentant son score il obtient des étoiles (elles deviennent en or), les paliers sont fixé en dessous de chaque étoile. A la droite de ces étoiles nous pouvons voir le nombre de score ajouté si les cases sélectionnées par le joueur sont détruites. Et tout à droite nous pouvons voir le score total. </p>
  <img src="../photos/samegame5.png" class="blocus" alt="fenetre fin">
  <img src="../photos/samegame6.png" class="blocus" id="photog" alt="fenetre fin">
  <p class="indent">Dans ces deux dernières captures d'écran nous pouvons voir la fin de notre jeu qui affiche le nombre d'étoiles et le score obtenu par le joueur. En bas de cette fenêtre nous pouvons y voir deux boutons : le premier "Rejouer" qui permet de retourner sur le menu afin de relancer une partie; le second "Quitter" qui permet de fermer la fenêtre.</p>
  <br>
<br>
</div>

<?php
  include "../templates/buttons.php";
  include "../templates/footer.php";
?>