<?php

ini_set('display_errors', 1);

$prénom = 'Daniel';
$faim = false;
$couleurdesyeux = 'brun';
$famille = array(0 => 'Christian', 1 => 'Jocelyne', 2 => 'Catherine', 3 => 'Daniel');

$chambre_est_sale = "0";
$heureJuste =time();
$heure = date("H");
$minute = date("i");
?>

<html>
  <head><title>Hi!</title></head>
  <link rel="stylesheet" href="../styles/style.css">
  <body>
    <!-- <h1>Bonjour <?php echo $_GET['nom']; ?>!</h1> -->
<?php

$heure = date("H");

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

    </form>
  </p>
  </body>
</html>
