<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Becode Charleroi - Turing v4 - Daniel Muyshond - PHP - La tructure ternaire</title>
    <link rel="stylesheet" href="styles/style.css">
  </head>

  <body>

  <h1>Becode Charleroi - Turing v4 - Muyshond Daniel - PHP</h1>
  <ul>
   <a href="cats.php" class="menu"><li class="menuBtn">cats.php</li></a>
   <a href="variables/Humans.php?nom=Ludovic" class="menu"><li class="menuBtn">Humans.php</li></a>
   <a href="conditions.php" class="menu"><li class="menuBtn">conditions.php</li></a>
   <a href="conditions-switch.php" class="menu"><li class="menuBtn">conditions-switch.php</li></a>
   <a href="array.php" class="menu"><li class="menuBtn">array.php</li></a>
   <a href="ternaire.php" class="menu"><li class="menuBtn">ternaire.php</li></a>
   <a href="loop.php" class="menu"><li class="menuBtn">loop.php</li></a>
   <a href="fonctions.php" class="menu"><li class="menuBtn">fonctions.php</li></a>
  </ul>
  <h2>La structure "ternaire"</h2>
  <h3>Dans un script ternaire.php déclare à l'aide d'une expression ternaire, une variable $bonjour dont la valeur est un message de salutation selon qu'une autre variable $genre soit 'H' ou 'F'.
Termine par afficher la valeur de $bonjour.</h3>
  <p class="exo">
    <pre class "PHP">
      if (isset($_GET['sexe'])) {
        $genre = $_GET['sexe'];
        $bonjour = ( $genre == "H") ? "<p>Bonjour Monsieur.</p>" :  "<p>Bonjour Madame.</p>";
        echo $bonjour;
      }
    </pre>
    <span class="resultat">Résultat :</span><br>
      <form class="hommeoufemme" action="ternaire.php" method="get">
        Masculin <input type="radio" name="sexe" value="H"> <br>
        Féminin <input type="radio" name="sexe" value="F"> <br>
        <input type="submit" value="submit">
      </form>
  </p>
  <?php
  ini_set('display_errors', 1);
  if (isset($_GET['sexe'])) {
    $genre = $_GET['sexe'];
    $bonjour = ( $genre == "H") ? "<p>Bonjour Monsieur.</p>" :  "<p>Bonjour Madame.</p>";
    echo $bonjour;
  }
  ?>

  </body>
</html>
