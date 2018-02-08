<?php
ini_set('display_errors', 1);

if (isset($_GET['sexe'])) {
  $genre = $_GET['sexe'];
  $bonjour = ( $genre == "H") ? "<p>Bonjour Monsieur.</p>" :  "<p>Bonjour Madame.</p>";
  //print_r($_GET['sexe']);
}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ternaire.php</title>
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>

  <form class="hommeoufemme" action="ternaire.php" method="get">
    Masculin <input type="radio" name="sexe" value="H"> <br>
    Féminin <input type="radio" name="sexe" value="F"> <br>
    <input type="submit" value="submit">
  </form>
  <?php
  if (isset($_GET['sexe'])){
    echo $bonjour;
  }

   ?>

  </body>
</html>
