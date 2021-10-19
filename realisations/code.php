<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="informatiques.css">
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
        <li><a href="code.php"class="click">C</a></li>
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
	<p class="entete"><br><br><br>Cette page est dédiée à mes réalisations informatiques en C, avec des explications, captures d'écran et lien de ces réalisations. </p><br>

   <p class="indent">
    <strong>11 Janvier 2020 </strong>: J'ai créé, avec pour binôme <a href="https://dwarves.iut-fbleau.fr/~cunsolo/WIM/Portfolio/" target="_blank" class="onglets">Florian CUNSOLO</a>, un jeu blocus comme projet de premier semestre de mon DUT Informatique. J'ai utilisé pour ce projet une <strong><a href="http://www.iut-fbleau.fr/sitebp/doc/doc_bib_graphique/" class="onglets"> bibliothèque</a></strong> faite par mon professeur de mathématiques, ainsi que du C. Vous pouvez trouver le code ci-dessous en cliquant sur "lien". Ci-dessous se trouve également des captures d'écran, avec explications, de mon jeux <br>
    <strong><a class="onglets" href="https://dwarves.iut-fbleau.fr/git/bernardal/Projet_APL_1.1.git" target="_blank">lien</a></strong>
  </p><br><br>
  <img src="../photos/blocus-menu.jpg" class="blocus" id="photo1" alt="fenetre menu">
  <img src="../photos/blocus-jeux.jpg" class="blocus" id="photo2" alt="fenetre jeu">
  <table>
  <tr>
    <td id="menu">
      Cette première capture d'écran est notre menu où l'utilisateur doit choisir la taille de la grille (entre 3 et 9) et le nombre de joueur (1 ou 2). Il peut à tout moment appuyer sur le bouton "Effacer" ce qui réinitialise ses choix. Pour passer à la page suivante il doit appuyer sur le bouton "Valider" après avoir choisi la taille et le nombre de joueur. 
    </td>
    <td id="jeux">
      Cette deuxième capture d'écran est la fenêtre de jeu. Tout d'abord les joueurs, chacun leurs tours, doivent choisir leur première position en plaçant leur pion respectif. Le jeu peut ensuite commencer : le premier joueur bouge son pion (uniquement dans la zone autour de lui en comptant les diagonales) puis place une croix à un endroit de la grille libre, c'est au tour du second joueur et ce jusqu'à ce que l'un des deux pions ne puisse plus bouger.  
    </td>
  </tr>
</table><br><br>

  <img src="../photos/blocus-resultat.jpg" class="blocus" id="photo3" alt="fenetre resultat">  
  <p id="resultat">Cette troisième et dernière capture d'écran est la fenêtre qui affiche le gagnant puis laisse l(es) utilisateur(s) choisir de rejouer ou de quitter le jeu.</p><br>
<br>
</div>
<?php
  include "../templates/buttons.php";
  include "../templates/footer.php";
?>