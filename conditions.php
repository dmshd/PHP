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
    <title>Becode Charleroi - Turing v4 - Daniel Muyshond - PHP - Les conditions</title>
    <link rel="stylesheet" href="../styles/style.css">
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
      <h2>Exercices</h2>
      <h3>0. Représente en code le fait de devoir ranger sa chambre si elle est sale.</h3>
      <p class="exo">
      <pre class="PHP">
        if ( $chambre_est_sale == "dégoutante" ) {
          echo "&#60;p&#62;C'est immonde !&#60;/p&#62;";
          echo "\n";
        }elseif ( $chambre_est_sale == "immaculée" ) {
          echo "&#60;p&#62;C'est bien propre !&#60;/p&#62;";
          echo "\n";
        }elseif ( $chambre_est_sale == "maniaque" ) {
          echo "&#60;p&#62;Ne prête pas trop d'attention aux détails !&#60;/p&#62;";
          echo "\n";
        }else {
          echo "&#60;p&#62;Je n'ai pas encore vu ta  chambre.&#60;/p&#62;";
          echo "\n";
        }
      </pre>
      <span class="resultat">Résultat :</span>
      <?php
      if ( $chambre_est_sale == "dégoutante" ) {
        echo "<p>C'est immonde !</p>";
        echo "\n";
      }elseif ( $chambre_est_sale == "immaculée" ) {
        echo "<p>C'est bien propre !</p>";
        echo "\n";
      }elseif ( $chambre_est_sale == "maniaque" ) {
        echo "<p>Ne prête pas trop d'attention aux détails !</p>";
        echo "\n";
      }else {
        echo "<p>Je n'ai pas encore vu ta  chambre.</p>";
        echo "\n";
      }
       ?>
      </p>
      <h3>1. Affiche un message de salutation différent selon l'heure courante.</h3>
      <p class="exo">
      <pre class="PHP">
        $heure = date("H");

        if ( $heure >= 5 and $heure <= 9) {
        echo "&#60;p&#62;Bonjour !&#60;/p&#62;";
      }elseif ($heure >= 9 and $heure < 12) {
        echo "&#60;p&#62;Bonne journée !&#60;/p&#62;";
      }elseif ($heure >= 12 and $heure < 16) {
        echo "&#60;p&#62;Bon après-midi !&#60;/p&#62;";
      }elseif ($heure >= 16 and $heure < 21) {
        echo "&#60;p&#62;Bonne soirée !&#60;/p&#62;";
      }elseif ($heure >= 21 and $heure < 5) {
        echo "&#60;p&#62;Bonne nuit !&#60;/p&#62;";
      }else {
        echo "&#60;p&#62;Bonjour !&#60;/p&#62;";
      }
      </pre>
      <span class="resultat">Résultat :</span>
      <?php
      $heure = date("H");
      $minute = date("i");

      if ( $heure >= 16 and $heure <= 17) {
        echo "<p>Bonjour !</p>";
      }elseif ($heure >= 9 and $heure < 12) {
        echo "<p>Bonne journée !</p>";
      }elseif ($heure >= 12 and $heure < 16) {
        echo "<p>Bon après-midi !</p>";
      }elseif ($heure >= 16 and $heure < 21) {
        echo "<p>Bonne soirée !</p>";
      }elseif ($heure >= 21 and $heure < 5) {
        echo "<p>Bonne nuit !</p>";
      }else {
        echo "<p>Bonjour !</p>";

      }
       ?>
      </p>

      <h3>2-3-4-5.Affiche une salutation différente selon l'âge, le genre, la langue et la note de l'utilisateur.</h3>
      <p class="exo">
      <pre class="PHP">
        if (isset($_GET['quelage']) AND isset($_GET['sexe']) AND isset($_GET['anglais']) AND isset($_GET['note']) ) {
            $age = $_GET['quelage'];
            $genre = $_GET['sexe'];
            $anglais = $_GET['anglais'];
            $note = $_GET['note'];

            if ( $age < 115 ) {

              if ( $age >= 18 ) {

                if ( $genre == "feminin" and $anglais == "non" ) {
                  if ( $age >= 21 and $age <= 40 ) {
                  echo "&#60;p>Bonjour Madame, bienvenue parmi nous !&#60;/p&#62;";
                }else {
                  echo "&#60;p&#62;Bonjour Madame. Désolé vous n'entrez pas dans les criètres de sélection...&#60;/p&#62;";
                  }
                }
                elseif ( $genre == "feminin" and $anglais == "oui" ) {
                  if ( $age >= 21 and $age <= 40 ) {
                  echo "&#60;p&#62;Hello Lady, Welcome onboard !&#60;/p&#62;";
                }else {
                  echo "&#60;p&#62;Hello Lady. Sorry, you are not selected...&#60;/p&#62;";
                  }
                }
                elseif ( $genre == "masculin" and $anglais == "non" ) {
                  echo "&#60;p&#62;Bonjour Monsieur.&#60;/p&#62;";
                }
                elseif ( $genre == "masculin" and $anglais == "oui") {
                  echo "&#60;&#62;>Hello Sir.&#60;/p&#62;";
                }
              }elseif ( $age > 12 and $age < 18 ) {
                if ( $genre == "feminin" and $anglais == "non" ) {
                  echo "&#60;p&#62;Bonjour Mademoiselle.&#60;/p&#62;";
                }
                elseif ( $genre == "feminin" and $anglais == "oui" ) {
                  echo "&#60;p&#62;Hello Girl.&#60;/p&#62;";
                }
                elseif ( $genre == "masculin" and $anglais == "non" ) {
                  echo "&#60;p&#62;Bonjour jeune homme.&#60;/p&#62;";
                }
                elseif ( $genre == "masculin" and $anglais == "non" ) {
                  echo "&#60;p&#62;Hello Boy.&#60;/p&#62;";
                }

              }elseif ( $age <= 12 ) {
                if ( $genre == "feminin" and $anglais == "non" ) {
                echo "&#60;p&#62;Salut petite !&#60;/p&#62;";
                }
                elseif ( $genre == "feminin" and $anglais == "oui" ) {
                  echo "&#60;p&#62;Hello Teenage girl !&#60;/p&#62;";
                }
                elseif ( $genre == "masculin" and $anglais == "non") {
                  echo "&#60;p&#62;Salut petit !&#60;/p&#62;";
                }
                elseif ( $genre == "masculin" and $anglais == "oui")
                  echo "&#60;p&#62;Hello Teenage boy !&#60;p&#60;";
              }

            }elseif ( $genre == "feminin" and $anglais == "non") {
              echo "&#60;p&#62; Wow ! Toujours vivante ?&#60;/p&#62;";
            }
            elseif ( $genre == "feminin" and $anglais == "oui") {
              echo "&#60;p&#62; Wow ! Hello Lady. You're still alive !&#60;/p&#62;";
            }
            elseif ( $genre == "masculin" and $anglais == "non") {
              echo "&#60;p&#62; Wow ! Toujours vivant ?&#60;/p&#62;";
            }
            elseif ( $genre == "masculin" and $anglais == "oui") {
              echo "&#60;p&#62; Wow ! Hello Sir. You're still alive !&#60;/p&#62;";
            }

            if ( $note >= 1 and $note <= 3) {
              if ($anglais == "non") {
                echo "&#60;p&#62;Ce travail est nul !&#60;/p&#62;";
              }
              elseif ($anglais == "oui") {
                echo "&#60;p&#62;This is shit.&#60;/p&#62;";
              }
            }
            elseif ($note <= 6 and $note <= 9) {
              if ($anglais == "non") {
                echo "&#60;p&#62;Ce travail n'est pas terrible.&#60;/p&#62;";
              }
              elseif ($anglais == "oui") {
                echo "&#60;p&#62; This work is bad. &#60;/p&#62;";
              }
            }
            elseif ($note == 10 ) {
              if ($anglais == "non") {
                echo "&#60;p&#62;Tout juste !&#60;/p&#62;";
              }
              elseif ($anglais == "oui") {
                echo "&#60;p&#62;Just the half.&#60;/p&#62;";
              }
            }
            elseif ($note >= 11 and $note <= 14) {
              if ($anglais == "non") {
                echo "&#60;p&#62;C'est pas mal.&#60;/p&#62;";
              }
              elseif ($anglais == "oui") {
                echo "&#60;p&#62;Not bad.&#60;/p&#62;";
              }
            }
            elseif ($note >=15 and $note <= 18) {
              if ($anglais == "non") {
                echo "&#60;p&#62;Bravo !&#60;/p&#62;";
              }
              elseif ($anglais == "oui") {
                echo "&#60;p&#62;Congrats.&#60;/p&#62;";
              }
            }
            elseif ($note >= 19 and $note <= 20) {
              if ($anglais == "non") {
                echo "&#60;p&#62;Tu as triché ? ;-)&#60;/p&#62;";
              }
              elseif ($anglais == "oui") {
                echo "&#60;p&#62;Have you cheated ? ;-)&#60;/p&#62;";
              }
            }
            elseif ($note > 20) {
              if ($anglais == "non") {
                echo "&#60;p&#62;Tu ne peux pas avoir eu plus de 20 sur 20. Essaye encore :-)&#60;/p&#62;";
              }
              elseif ($anglais == "oui") {
                echo "&#60;p&#62;more than 20/20 is impossible. Try again. :-)&#60;/p&#62;";
              }
            }
          }
      </pre>
      <span class="resultat">Résultat :</span>
      <?php
      if (isset($_GET['quelage']) AND isset($_GET['sexe']) AND isset($_GET['anglais']) AND isset($_GET['note']) ) {
          $age = $_GET['quelage'];
          $genre = $_GET['sexe'];
          $anglais = $_GET['anglais'];
          $note = $_GET['note'];

          if ( $age < 115 ) {

            if ( $age >= 18 ) {

              if ( $genre == "feminin" and $anglais == "non" ) {
                if ( $age >= 21 and $age <= 40 ) {
                echo "<p>Bonjour Madame, bienvenue parmi nous !</p>";
              }else {
                echo "<p>Bonjour Madame. Désolé vous n'entrez pas dans les criètres de sélection...</p>";
                }
              }
              elseif ( $genre == "feminin" and $anglais == "oui" ) {
                if ( $age >= 21 and $age <= 40 ) {
                echo "<p>Hello Lady, Welcome onboard !</p>";
              }else {
                echo "<p>Hello Lady. Sorry, you are not selected...</p>";
                }
              }
              elseif ( $genre == "masculin" and $anglais == "non" ) {
                echo "<p>Bonjour Monsieur.</p>";
              }
              elseif ( $genre == "masculin" and $anglais == "oui") {
                echo "<>>Hello Sir.</p>";
              }
            }elseif ( $age > 12 and $age < 18 ) {
              if ( $genre == "feminin" and $anglais == "non" ) {
                echo "<p>Bonjour Mademoiselle.</p>";
              }
              elseif ( $genre == "feminin" and $anglais == "oui" ) {
                echo "<p>Hello Girl.</p>";
              }
              elseif ( $genre == "masculin" and $anglais == "non" ) {
                echo "<p>Bonjour jeune homme.</p>";
              }
              elseif ( $genre == "masculin" and $anglais == "non" ) {
                echo "<p>Hello Boy.</p>";
              }

            }elseif ( $age <= 12 ) {
              if ( $genre == "feminin" and $anglais == "non" ) {
              echo "<p>Salut petite !</p>";
              }
              elseif ( $genre == "feminin" and $anglais == "oui" ) {
                echo "<p>Hello Teenage girl !</p>";
              }
              elseif ( $genre == "masculin" and $anglais == "non") {
                echo "<p>Salut petit !</p>";
              }
              elseif ( $genre == "masculin" and $anglais == "oui")
                echo "<p>Hello Teenage boy !<p<";
            }

          }elseif ( $genre == "feminin" and $anglais == "non") {
            echo "<p> Wow ! Toujours vivante ?</p>";
          }
          elseif ( $genre == "feminin" and $anglais == "oui") {
            echo "<p> Wow ! Hello Lady. You're still alive !</p>";
          }
          elseif ( $genre == "masculin" and $anglais == "non") {
            echo "<p> Wow ! Toujours vivant ?</p>";
          }
          elseif ( $genre == "masculin" and $anglais == "oui") {
            echo "<p> Wow ! Hello Sir. You're still alive !</p>";
          }

          if ( $note >= 1 and $note <= 3) {
            if ($anglais == "non") {
              echo "<p>Ce travail est nul !</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p>This is shit.</p>";
            }
          }
          elseif ($note <= 6 and $note <= 9) {
            if ($anglais == "non") {
              echo "<p>Ce travail n'est pas terrible.</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p> This work is bad. </p>";
            }
          }
          elseif ($note == 10 ) {
            if ($anglais == "non") {
              echo "<p>Tout juste !</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p>Just the half.</p>";
            }
          }
          elseif ($note >= 11 and $note <= 14) {
            if ($anglais == "non") {
              echo "<p>C'est pas mal.</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p>Not bad.</p>";
            }
          }
          elseif ($note >=15 and $note <= 18) {
            if ($anglais == "non") {
              echo "<p>Bravo !</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p>Congrats.</p>";
            }
          }
          elseif ($note >= 19 and $note <= 20) {
            if ($anglais == "non") {
              echo "<p>Tu as triché ? ;-)</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p>Have you cheated ? ;-)</p>";
            }
          }
          elseif ($note > 20) {
            if ($anglais == "non") {
              echo "<p>Tu ne peux pas avoir eu plus de 20 sur 20. Essaye encore :-)</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p>more than 20/20 is impossible. Try again. :-)</p>";
            }
          }
        }
      ?>
      </p>
      <br>

    <p>
    <form method="get" action="conditions.php">
      Quel âge as-tu ?
      <input type="number" name="quelage"><br>
      Masculin <input type="radio" name="sexe" value="masculin">
      Féminin <input type="radio" name="sexe" value="feminin"><br>
      Parles-tu anglais ? <br> yes <input type="radio" name="anglais" value="oui"> non <input type="radio" name="anglais" value="non">
      <br>Quelle note sur 20 as-tu reçu ? <br> <input type="number" name="note"><br>
      <br> <input type="submit" value="Submit">
    </form>
    <?php
      if (isset($_GET['quelage']) AND isset($_GET['sexe']) AND isset($_GET['anglais']) AND isset($_GET['note']) ) {
          $age = $_GET['quelage'];
          $genre = $_GET['sexe'];
          $anglais = $_GET['anglais'];
          $note = $_GET['note'];

          if ( $age < 115 ) {

            if ( $age >= 18 ) {

              if ( $genre == "feminin" and $anglais == "non" ) {
                if ( $age >= 21 and $age <= 40 ) {
                echo "<p>Bonjour Madame, bienvenue parmi nous !</p>";
              }else {
                echo "<p>Bonjour Madame. Désolé vous n'entrez pas dans les criètres de sélection...</p>";
                }
              }
              elseif ( $genre == "feminin" and $anglais == "oui" ) {
                if ( $age >= 21 and $age <= 40 ) {
                echo "<p>Hello Lady, Welcome onboard !</p>";
              }else {
                echo "<p>Hello Lady. Sorry, you are not selected...</p>";
                }
              }
              elseif ( $genre == "masculin" and $anglais == "non" ) {
                echo "<p>Bonjour Monsieur.</p>";
              }
              elseif ( $genre == "masculin" and $anglais == "oui") {
                echo "<p>Hello Sir.</p>";
              }
            }elseif ( $age > 12 and $age < 18 ) {
              if ( $genre == "feminin" and $anglais == "non" ) {
                echo "<p>Bonjour Mademoiselle.</p>";
              }
              elseif ( $genre == "feminin" and $anglais == "oui" ) {
                echo "<p>Hello Girl.</p>";
              }
              elseif ( $genre == "masculin" and $anglais == "non" ) {
                echo "<p>Bonjour jeune homme.</p>";
              }
              elseif ( $genre == "masculin" and $anglais == "non" ) {
                echo "<p>Hello Boy.</p>";
              }

            }elseif ( $age <= 12 ) {
              if ( $genre == "feminin" and $anglais == "non" ) {
              echo "<p>Salut petite !</p>";
              }
              elseif ( $genre == "feminin" and $anglais == "oui" ) {
                echo "<p>Hello Teenage girl !</p>";
              }
              elseif ( $genre == "masculin" and $anglais == "non") {
                echo "<p>Salut petit !</p>";
              }
              elseif ( $genre == "masculin" and $anglais == "oui")
                echo "<p>Hello Teenage boy !";
            }

          }elseif ( $genre == "feminin" and $anglais == "non") {
            echo "<p> Wow ! Toujours vivante ?</p>";
          }
          elseif ( $genre == "feminin" and $anglais == "oui") {
            echo "<p> Wow ! Hello Lady. You're still alive !</p>";
          }
          elseif ( $genre == "masculin" and $anglais == "non") {
            echo "<p> Wow ! Toujours vivant ?</p>";
          }
          elseif ( $genre == "masculin" and $anglais == "oui") {
            echo "<p> Wow ! Hello Sir. You're still alive !</p>";
          }

          if ( $note >= 1 and $note <= 3) {
            if ($anglais == "non") {
              echo "<p>Ce travail est nul !</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p>This is shit.</p>";
            }
          }
          elseif ($note <= 6 and $note <= 9) {
            if ($anglais == "non") {
              echo "<p>Ce travail n'est pas terrible.</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p> This work is bad. </p>";
            }
          }
          elseif ($note == 10 ) {
            if ($anglais == "non") {
              echo "<p>Tout juste !</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p>Just the half.</p>";
            }
          }
          elseif ($note >= 11 and $note <= 14) {
            if ($anglais == "non") {
              echo "<p>C'est pas mal.</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p>Not bad.</p>";
            }
          }
          elseif ($note >=15 and $note <= 18) {
            if ($anglais == "non") {
              echo "<p>Bravo !</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p>Congrats.</p>";
            }
          }
          elseif ($note >= 19 and $note <= 20) {
            if ($anglais == "non") {
              echo "<p>Tu as triché ? ;-)</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p>Have you cheated ? ;-)</p>";
            }
          }
          elseif ($note > 20) {
            if ($anglais == "non") {
              echo "<p>Tu ne peux pas avoir eu plus de 20 sur 20. Essaye encore :-)</p>";
            }
            elseif ($anglais == "oui") {
              echo "<p>more than 20/20 is impossible. Try again. :-)</p>";
            }
          }
        }
      ?>
      </p>

  </body>
</html>
