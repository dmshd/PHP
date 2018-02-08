<?php
ini_set('display_errors', 1);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Générateur d'excuses</title>
    <link rel="stylesheet" href="../styles/style.css">
  </head>
  <body>
    <form class="formExcuse" action="test.php" method="post">
        Nom de l'enfant :<br><input type="text" name="nomEnfant"><br>
        Nom du professeur :<br><input type="text" name="nomInstit"><br>
        <!-- Madame <input type="radio" name="sexe" value="masculin"><br>
        Monsieur <input type="radio" name="sexe" value="feminin"><br> -->

        <label for="maladie">maladie</label>
        <input type="radio" name="raison" value="d'une gastro-enthérite aigüe fulgurante." id="maladie" >

        <label for="deces">Décès</label>
        <input type="radio" name="raison" id="deces" value="du décès de son hamster roborowskii prénommé Viktor qui l'a profondément marqué..">

        <label for="activite" >Activité extra-scolaire</label>
        <input type="radio" name="raison" id="activite" value="d'une participation au casting de The Voice Kids..">

        <label for="autre" >autre</label>
        <input type="radio" name="raison" id="autre" value="d'un dysfonctionnement de notre SMART-Tondeuse.."><br>

        <input type="submit" value="submit">
      </form>
    <?php

    ?>
  </body>
</html>
