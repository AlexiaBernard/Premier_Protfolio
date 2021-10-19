<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="competences.css">
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
    ?>
    <li><a href="competences.php" class="click">Compétences</a></li>
    <?php
      include "../templates/contact.php";
    ?>
  </ul>
  </nav>
  <div class="conteneur">
    <br><br><br>
    <p class="debut">
      Cette page est dédiée à mes compétences comme vous pouvez le voir ci-dessous je les ai divisées en trois parties : Languistiques, Informatiques et Bureautiques. Afin de voir mes compétences dans un domaine, il vous suffit de placer votre souris sur le logo du domaine en question. 
    </p><br>

    <p class="titre">
      Compétences Languistiques<br>
    </p>

    <div class="divl">
      <img src="../photos/drapeau_anglais.jpg" class="logo" id="anglais" alt="drapeau anglais">
      <span class="tooltiptextl">Bon Niveau</span>
    </div>

    <div class="div">
      <img src="../photos/drapeau_espagnol.png" class="logo" id="espagnol" alt="drapeau espagnol">
      <span class="tooltiptext">Niveau Moyen</span>
    </div>

    <p class="titre">
      Compétences Informatiques<br>
    </p>

    <div class="div2">
      <img src="../photos/c.png" class="logo" id="c" alt="Logo c">
      <span class="tooltiptext2">Acquis</span>
    </div>

    <div class="div">
      <img src="../photos/java.png" class="logo" id="java" alt="Logo java">
      <span class="tooltiptext">Partiellement Acquis</span>
    </div>

    <div class="div">
      <img src="../photos/html5.png" class="logo" id="html5" alt="Logo HTML5">
      <span class="tooltiptext">Acquis</span>
    </div>

    <div class="div2">
      <img src="../photos/css3.png" class="logo" id="css3" alt="Logo CSS3">
      <span class="tooltiptext2">Partiellement Acquis</span>
    </div>

    <div class="div">
      <img src="../photos/js.png" class="logo" id="js" alt="Logo Js">
      <span class="tooltiptext">Partiellement Acquis</span>
    </div>

    <div class="div">
      <img src="../photos/uml.png" class="logo" id="uml" alt="Logo uml">
      <span class="tooltiptext">Acquis</span>
    </div>

    <div class="div2">
      <img src="../photos/sql.png" class="logo" id="sql" alt="Logo sql">
      <span class="tooltiptext2">Acquis</span>
    </div>

    <div class="div">
      <img src="../photos/linux.png" class="logo" id="linux" alt="Logo linux">
      <span class="tooltiptext">Partiellement Acquis</span>
    </div>

    <div class="div">
      <img src="../photos/bash.png" class="logo" id="bash" alt="Logo bash">
      <span class="tooltiptext">Partiellement Acquis</span>
    </div>

    <p class="titre">
      Compétences Bureautiques<br>
    </p>

    <div class="div2">
      <img src="../photos/word.png" class="logo" id="word" alt="Logo word">
      <span class="tooltiptext2">Acquis</span>
    </div>

    <div class="div">
      <img src="../photos/excel.png" class="logo" id="excel" alt="Logo excel">
      <span class="tooltiptext">Acquis</span>
    </div>

    <div class="div">
      <img src="../photos/powerpoint.png" class="logo" id="pp" alt="Logo pp">
      <span class="tooltiptext">Acquis</span>
    </div>
   
        
</div>


<?php
  include "../templates/buttons.php";
  include "../templates/footer.php";
?>