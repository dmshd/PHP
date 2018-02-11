<?php

ini_set('display_errors', 1);

$prénom = 'Daniel';
$monage = 28;
$faim = false;
$couleurdesyeux = 'brun';
$famille = array(0 => 'Christian', 1 => 'Jocelyne', 2 => 'Catherine', 3 => 'Daniel');

$chambre_est_sale = "0";
$heureJuste =time();
$heure = date("H");
$minute = date("i");
?>

<html>
  <head>
    <title>Becode Charleroi - Turing v4 - Daniel Muyshond - Les variables</title>
    <link rel="stylesheet" href="../styles/style.css">
  </head>

  <body>
    <h1>Becode Charleroi - Turing v4 - Muyshond Daniel - PHP</h1>
    <ul>
     <a href="../cats.php" class="menu"><li class="menuBtn">cats.php</li></a>
     <a href="Humans.php?nom=Ludovic" class="menu"><li class="menuBtn">Humans.php</li></a>
     <a href="../conditions.php" class="menu"><li class="menuBtn">conditions.php</li></a>
     <a href="../conditions-switch.php" class="menu"><li class="menuBtn">conditions-switch.php</li></a>
     <a href="../array.php" class="menu"><li class="menuBtn">array.php</li></a>
     <a href="../ternaire.php" class="menu"><li class="menuBtn">ternaire.php</li></a>
     <a href="../loop.php" class="menu"><li class="menuBtn">loop.php</li></a>
     <a href="../fonctions.php" class="menu"><li class="menuBtn">fonctions.php</li></a>
    </ul>
    <h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>
    <h2>Les variables</h2>
      <h3>Initie une variable décrivant ton prénom.</h3>
      <p class="exo">
      <pre class="PHP">$prénom = 'Daniel';</pre>
      </p>
      <h3>Ensuite, sur une seconde ligne, initie une variable qui représente ton âge.</h3>
      <p class="exo">
      <pre class="PHP">$monage = 28;</pre>
      </p>
      <h3>Ensuite, à la ligne suivante, initie une variable qui décrive si tu as faim ou pas.</h3>
      <p class="exo">
      <pre class="PHP">$faim = false;</pre>
      </p>
      <h3>Ensuite, à la ligne suivante, initie une variable qui décrive la couleur de tes yeux.</h3>
      <p class="exo">
      <pre class="PHP">$couleurdesyeux = 'brun';</pre>
      </p>
      <h3>Ensuite, à la ligne suivante, initie une variable qui décrive ta famille (avec une variable Tableau, dont chaque entrée est le prénom d'un membre de ta famille).</h3>
      <p class="exo">
      <pre class="PHP">$famille = array(0 => 'Christian', 1 => 'Jocelyne', 2 => 'Catherine', 3 => 'Daniel');</pre>
      </p>
      <br>

  <p>
    <form method="get" action="humans.php">
      Quel âge as-tu ?
      <input type="number" name="quelage"><br>
      Masculin <input type="radio" name="sexe" value="masculin">
      Féminin <input type="radio" name="sexe" value="feminin"><br>
      Parles-tu anglais ? <br> yes <input type="radio" name="anglais" value="oui"> non <input type="radio" name="anglais" value="non">
      <br>Quelle note sur 20 as-tu reçu ? <br> <input type="number" name="note"><br>
      <br> <input type="submit" value="Submit">

    <?php


     ?>

    </form>
  </p>
  </body>
</html>
