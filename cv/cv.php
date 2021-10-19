<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="cv.css">
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
    ?>
  	<li><a href="cv.php" class="click">Curriculum vitæ (CV)</a></li>
    <?php
      include "../templates/realisations.php";
      include "../templates/exp.php";
      include "../templates/competences.php";
      include "../templates/contact.php";
    ?>
  </ul>
  </nav>
  <div class="conteneur">
    <br><br>
       
    <div class="un"><br>
      <img src="../photos/photo.jpg" class="photo" alt="Photo identite">
      <br><br>
      <p id="nom"><strong>Aléxia BERNARD</strong></p><br>
      <p id="adresse"><i class="material-icons">home</i>86 rue des bateliers </p><p id="codep">
      47400 Lagruère</p>
      <p id="phone"><i class="material-icons">phone_android</i> 06 95 24 68 50</p>
      <p id="mail"><i class="material-icons">mail_outline</i> alexiabernard25 @gmail.com</p>
      <p id="profil"><i class="material-icons">account_circle</i> 19 ans - Célibataire</p>
      <p id="car"><i class="material-icons">directions_car</i> Véhicule - permis B</p>
    </div>

    <br><br>
    <div class="deux">
      <p id="titre">Etudiante en Informatique</p>
    </div>
    <br>        
    <br><br><br>
    <div class="trois"><br>
      <p id="formation">Formation</p>

      <table class="tableau_form">
      <tr>
        <td class="tab1"><strong>• 2020-2022 </strong></td>
        <td><strong>DUT Informatique</strong>, à l’IUT Sénart-Fontainebleau site Fontainebleau, <strong>majeure de la promotion</strong> lors du premier Semestre</td>
      </tr>
      <tr>
        <td class="tab1"><strong>• 2020 </strong></td>
        <td><strong>Baccalauréat Scientifique</strong> option SI (Sciences de l’Ingénieur) spécialité Mathématiques, mention <strong>Très Bien</strong> -Lycée André Malraux 77130 Montereau Fault Yonne</td>
      </tr>
    </table>
    </div>
    <br>

    <div class="quatre"><br>
      <p id="exp">Expériences Professionnelles</p>
      
      <table class="tableau_exp">
      <tr>
      <tr>
        <td class="tab2"><strong>• 23 Juin 2021 - 24 Juillet 2021 </strong> </td>
        <td><strong>Factrice d'équipe</strong> -La Poste 77130<br>
        <strong>Missions</strong> : tournée voiture (3 semaines) distribution courriel, publicité, colis et recommandés; <br>
      tournée vélo (1 semaine) distribution courriel et recommandés</td>
      </tr>
        <td class="tab2"><strong>• Septembre 2016-mars 2018</strong> </td>
        <td><strong>Entraîneur bénévole de gymnastique artistique féminine</strong> -Club de gymnastique artistique    féminine de Saint Germain Laval 77130 <br>
        <strong>Missions</strong> : installer/désinstaller le matériel, planifier et organiser les séances, organiser les équipes, animer, créer une chorégraphie pour chaque gymnaste, accompagner les gymnastes     en compétitions, créer une présentation de fin d’année</td>
      </tr>
    </table>
    </div>
    <br>

    <div class="cinq"><br>
      <p id="ling">Compétences Linguistiques</p>
      
      <table class="tableau_ling">
      <tr>
        <td class="tab3"><strong>• Anglais</strong> </td>
        <td><strong>bon niveau</strong></td>
      </tr>
      <tr>
        <td class="tab3"><strong>• Espagnol</strong> </td>
        <td>niveau moyen (arrêt scolaire de l'apprentissage de l'Espagnol  en Terminale)</td>
      </tr>
    </table>
    </div>
    <br>

     <div class="six"><br>
      <p id="info">Compétences Informatiques</p>
      
      <table class="tableau_info">
      <tr>
        <td>Programmation impérative </td>
        <td>C</td>
        <td><strong>Acquis</strong></td>
      </tr>
      <tr>
        <td>Programmation objet </td>
        <td>Java</td>
        <td>Partiellement acquis</td>
      </tr>
      <tr>
        <td>WEB </td>
        <td>HTML</td>
        <td><strong>Acquis</strong></td>
      </tr>
      <tr>
        <td>WEB </td>
        <td>CSS</td>
        <td>Partiellement acquis</td>
      </tr>
      <tr>
        <td>WEB </td>
        <td>JavaScript</td>
        <td>Partiellement acquis</td>
      </tr>
      <tr>
        <td>Modélisation </td>
        <td>UML</td>
        <td><strong>Acquis</strong></td>
      </tr>
      <tr>
        <td>Bases de données </td>
        <td>SQL</td>
        <td><strong>Acquis</strong></td>
      </tr>
      <tr>
        <td>Système d'exploitation </td>
        <td>Linux</td>
        <td>Partiellement acquis</td>
      </tr>
      <tr>
        <td>Administration et réseaux </td>
        <td>Scripting (bash)</td>
        <td>Partiellement acquis</td>
      </tr>
    </table>

    <p id="rea"><strong>Réalisations</strong></p><br>
    <p class="rea"> 
      <strong>Juillet 2021</strong> : <a href="https://dwarves.iut-fbleau.fr/git/bernardal/PROJET_PHP_2.1.git" class="lien" target="_blank"><strong>Doodle</strong></a>, utilisation HTML, CSS et CodeIgniter<br><br>

      <strong>Avril 2021</strong> : <a href="https://dwarves.iut-fbleau.fr/git/bernardal/PT21_APL2020.git" class="lien" target="_blank"><strong>Samegame</strong></a>, utilisation Java<br><br>

      <strong>Janvier 2021</strong> : <a href="https://dwarves.iut-fbleau.fr/git/bernardal/projetwims1_bernardal.git" class="lien" target="_blank"><strong>Portfolio</strong></a>, utilisation HTML, CSS et JavaScript<br><br>
      <strong>Janvier 2021</strong> : <a href="https://dwarves.iut-fbleau.fr/git/bernardal/Projet_APL_1.1.git" class="lien" target="_blank"><strong>Jeux blocus</strong></a>, utilisation C
    </p>
    </div>
    <br>

    <div class="sept"><br>
      <p id="extra">Activités extrascolaires</p>
      
      <table class="tableau_extra">
      <tr>
        <td class="tab4"><strong>• 2007-2018</strong> </td>
        <td><strong>Pratique de la gymnastique artistique féminine</strong> en UFOLEP, niveau maximum : 4 et championnat   de France en 2014, <strong>Obtention du BF10</strong> (Brevet Fédéral 1 Officiel) de gymnastique en 2017 -Clubs de gymnastique artistique féminine 77</td>
      </tr>
      <tr>
        <td class="tab4"><strong>• Septembre 2012- janvier 2014</strong> </td>
        <td>1er cycle de Solfège et une année flûte traversière puis le 1er semestre de piano -Conservatoire Municipal Gaston Litaize Montereau Fault Yonne</td>
      </tr>
      <tr>
        <td class="tab4"><strong>• 2011-2013</strong> </td>
        <td>Participation au CME (Conseil Municipal des Enfants) -Ecole élémentaire Claude Sigonneau Montereau Fault Yonne</td>
      </tr>
    </table>
    </div>
    <br><br>
  </div>

  <button class="btn4" ><a href="#" onclick="JavaScript:print()">
    <i class="material-icons">print</i></a>
    </button>
    <button class="btn5" >
    <a href="cv.pdf" target="_blank"><i class="material-icons">picture_as_pdf</i></a>
    </button>
  
<?php
  include "../templates/buttons.php";
  include "../templates/footer.php";
?>