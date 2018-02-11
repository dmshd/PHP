<?php
ini_set('display_errors', '1');
$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Becode Charleroi - Turing v4 - Daniel Muyshond - PHP - Les boucles</title>
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
    <h2>Les boucles</h2>
    <h3>foreach</h3>
    <h3><code>$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');</code><br>
        Construire une boucle qui affiche chaque élément de l'array à l'aide de foreach<br>
        Ensuite, dans la boucle, conjuger le verbe "coder" en fonction du pronom. (utiliser une condition pour cela)</h3>
    <p class="exo">
    <pre class="PHP">
      foreach ($pronoms_personnels as $temp) {
      echo $temp;
      }
    </pre>
    <span class="resultat">Résultat :</span><br>
    <?php
    foreach ($pronoms_personnels as $temp) {
    echo $temp;
    }
     ?>
    </p>

    <h3>Ensuite, dans la boucle, conjuger le verbe "coder" en fonction du pronom. (utilise une condition pour cela)</h3>
    <p class="exo">
      <pre class="PHP">
      foreach ($pronoms_personnels as $pronom) {
        if ($pronom == "Je") {
          echo "$pronom code&#60;br&#62;";
        }
        elseif ($pronom == "Tu") {
          echo "$pronom codes&#60;br&#62;";
        }
        elseif ($pronom == "Il/Elle") {
          echo "$pronom code&#60;br&#62;";
        }
        elseif ($pronom == "Nous") {
          echo "$pronom codons&#60;br&#62;";
        }
        elseif ($pronom == "Vous") {
          echo "$pronom codez&#60;br&#62;";
        }
        elseif ($pronom == "Elles/Ils") {
          echo "$pronom codent&#60;br&#62;";
        }
      }
    </pre>
    <span class="resultat">Résultat :</span><br>
    <?php
    foreach ($pronoms_personnels as $pronom) {
      if ($pronom == "Je") {
        echo "$pronom code<br>";
      }
      elseif ($pronom == "Tu") {
        echo "$pronom codes<br>";
      }
      elseif ($pronom == "Il/Elle") {
        echo "$pronom code<br>";
      }
      elseif ($pronom == "Nous") {
        echo "$pronom codons<br>";
      }
      elseif ($pronom == "Vous") {
        echo "$pronom codez<br>";
      }
      elseif ($pronom == "Elles/Ils") {
        echo "$pronom codent<br>";
      }
    }
    //   elseif ($pronom == Tu) {
    //     echo "$pronom codes";
    //   }
    // }
    ?>
    </p>
    <h3>while</h3>
    <p class="exo">
      <pre class="PHP">
        while ($nombre_de_lignes <= 100)
        {
            echo $nombre_de_lignes . ': Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.&#60;br /&#62;';
            $nombre_de_lignes++; // équivaut à écrire $nombre_de_lignes = $nombre_de_lignes +1;
        }
      </pre>
      <span class="resultat">Résultat :</span><br>
      <?php
      $nombre_de_lignes = 1;

      while ($nombre_de_lignes <= 100)
      {
          echo $nombre_de_lignes . ': Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
          $nombre_de_lignes++; // équivaut à écrire $nombre_de_lignes = $nombre_de_lignes +1;
      }
       ?>
    </p>
    <h3>for</h3>
    <p class="exo">
      <pre class="PHP">
        for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
        {
            echo 'Ceci est la ligne n°' . $nombre_de_lignes . '&#60;br&#62; />';
        }
      </pre>
      <span class="resultat">Résultat :</span><br>
      <?php
      for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
      {
          echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
      }
       ?>
    </p>
    <p class="exo">
       <h3>Ecrire une boucle qui affiche les numéros de 1 à 120 à l'aide de  while</h3>
       <pre>
         $numeros = 1;
         while ($numeros <= 120) {
           echo "$numeros &#60;br&#62;";
           $numeros++;
         }
       </pre>
       <span class="resultat">Résultat :</span><br>
       <?php
        $numeros = 1;
        while ($numeros <= 120) {
          echo "$numeros <br>";
          $numeros++;
        }
        ?>
      </p>
      <h3>Ecrire une boucle qui affiche les numéros de 1 à 120 à l'aide de  for</h3>
      <p class="exo">
      <pre class="PHP">
        for ($nFor =  0; $nFor <= 120; $nFor++) {
          echo $nFor . '&#60;br&#62;';
        }
      </pre>
      <span class="resultat">Résultat :</span><br>
      <?php
       for ($nFor =  0; $nFor <= 120; $nFor++) {
         echo $nFor . '<br>';
       }
       ?>
     </p>
     <h3>Créer un tableau contenant tous les prénoms des personnes composant ta classe. Affiche ces prénoms à l'aide d'une boucle.</h3>
     <p class="exo">
     <pre class="PHP">
       function print_r2($val){
         echo '&#60;pre&#62;';
         print_r($val);
         echo  '&#60;/pre&#62;';
       }
       print_r2($turingv4);

       foreach ($turingv4 as $turingcount) {
         echo $turingcount . '&#60;br&#62;';
       }
     </pre>
     <span class="resultat">Résultat :</span><br>
     <?php
      $turingv4 = array(
        'Steve',
        'Kevin',
        'Romain',
        'Philippe',
        'Geoffrey',
        'Morgan',
        'Arnaud',
        'David',
        'Dorian',
        'Bryan',
        'Jérôme',
        'Daphné',
        'Daniel',
        'Sarah',
        'Frédéric',
        'Jacques',
        'Félicien',
        'Jordan',
        'Claude',
        'Jennifer',
        'Michael',
        'Sébastien',
        'Kévin',
        'Mathieu',
        'Félix',
        'Ludovic'
      );
      function print_r2($val){
        echo '<pre>';
        print_r($val);
        echo  '</pre>';
      }
      print_r2($turingv4);
      foreach ($turingv4 as $turingcount) {
        echo $turingcount . '<br>';
      }
      ?>
      </p>
      <h3>Créer un tableau contenant au moins 10 pays du monde. Une fois fait, utilise une boucle pour générer du html correspondant à une selectbox permettant à un utilisateur d'indiquer son pays dans un formulaire html.</h3>
      <p class="exo">
      <pre class="PHP">
        $dixpays = array('France', 'Allemagne', 'Zimbabwe', 'Bulgarie', 'Etats-Unis', 'Russie', 'Yemen', 'Mongolie', 'Pérou', 'Corée-du-nord' );
        foreach ($dixpays as $payscount) {
          echo '&#60;p&#62;' . $payscount . '&#60;/p&#62;';
        }
      </pre>

      <span class="resultat">Résultat :</span><br>
      <?php
          $dixpays = array(
            'FR' => 'France',
            'DE' => 'Allemagne',
            'ZW' => 'Zimbabwe',
            'BG' => 'Bulgarie',
            'US' => 'Etats-Unis',
            'RU' => 'Russie',
            'YE' => 'Yemen',
            'MN' => 'Mongolie',
            'PE' => 'Pérou',
            'KR' => 'Corée-du-nord'
          );
          foreach ($dixpays as $payscount) {
            echo '<p>' . $payscount . '</p>';
          }
          $dixpaysIso = array_keys($dixpays);
      ?>
      </p>
      <h3>Utiliser la clef pour qu'elle devienne la valeur de la balise option dans ton html</h3>
      <p class="exo">
      <pre class="PHP">
          foreach ($dixpaysIso as $key => $value) {
            echo '&#60;option value="' . $key . '"&#62;' . $value . '&#60;/option>';
          }
      </pre>
      <span class="resultat">Résultat :</span><br>
      <select>
          <?php
            foreach ($dixpaysIso as $key => $value) {
              echo '<option value="' . $key . '">' . $value . '</option>';
            }
          ?>
      </select>
      </p>

  </body>
</html>
