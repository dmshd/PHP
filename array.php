<?php
ini_set('display_errors', 1);
// Afficher tableau représentant ma famille
$famille = array('Chritian', 'Jocelyne', 'Catherine', 'Charlie');
$plats = array('pizza', 'spaghettis bolo', 'vitoulets', 'omelettes');
$film = array('Black Mirror', 'Avatar', 'Will Hunting', 'Fight Club' );
$papa = array(
  'prenom' => 'Christian',
  'nom' => 'Muyshond',
  'age' => 58,
  'adresse' => 'rue du pont de l\'origine',
  'numeroRue' => 35,
  'codePostal' => 7180,
  'ville' => 'Seneffe',
  'fumeur' => false,
  'sportif' => false,
  'gluten' => false,
  'hobbies' => array( 'plaisance', '2ememain', 'films et séries TV')
);
$moi = array(
  'prenom' => 'Daniel',
  'nom' => 'Muyshond',
  'age' => 28,
  'adresse' => 'rue Léon Bernus',
  'numeroRue' => 46,
  'codePostal' => 6000,
  'ville' => 'Charleroi',
  'fumeur' => false,
  'sportif' => true,
  'gluten' => false,
  'hobbies' => array( 'photographie', 'guitare', 'VTT'),
  'papa' => $papa
);

$toi = array(
  'prenom' => 'Ame',
  'nom' => 'Soeur',
  'age' => '28',
  'adresse' => 'rue Léon Bernus',
  'numeroRue' => 46,
  'codePostal' => 6000,
  'ville' => 'Charleroi',
  'fumeur' => false,
  'sportif' => true,
  'gluten' => false,
  'hobbies' => array('guitare', 'chant', 'cuisine')
);

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <link rel="stylesheet" href="styles/style.css">
     <meta charset="utf-8">
     <title>Becode Charleroi - Turing v4 - Daniel Muyshond - PHP - Les tableaux</title>
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
    <h2>Les tableaux</h2>
    <h3>Créer un array représentant ta famille</h3>
    <p class="exo">
       <pre class="PHP">
         $famille = array('Chritian', 'Jocelyne', 'Catherine', 'Charlie');
       </pre>
    </p>
    <h3>Créer un array décrivant tes plats préférés</h3>
    <p class="exo">
       <pre class="PHP">
         $plats = array('pizza', 'spaghettis bolo', 'vitoulets', 'omelettes');
       </pre>
       <span class="resultat">Résultat :</span>
       <br>
       <?php print_r($plats) ; ?>
    </p>
    <h3>Créer un array décrivant tes films et séries préférés</h3>
    <p class="exo">
       <pre class="PHP">
         $film = array('Black Mirror', 'Avatar', 'Will Hunting', 'Fight Club' );
       </pre>
    </p>
    <h3>Afficher uniquement ton film préféré</h3>
    <p class="exo">
       <pre class="PHP">
         print_r($film[1]) ;
       </pre>
       <span class="resultat">Résultat :</span><br>
       <?php print_r($film[1]) ; ?>
    </p>
    <h3>Se décrire dans un tableau $moi. Utiliser au moins deux valeurs de chaque type (texte, booléenne, Int).<br>
      Rajouter tes hobbies sous forme de tableau dans ton tableau. Créer un deuxième tableau similaire qui décrive ton papa et ses hobbies.<br>
      À ton tableau $moi, ajouter un élément 'papa' dont la valeur équivaut à $papa. Affiche le contenu de $moi via print_r().<br>
    </h3>
    <p ="exo">
      <pre class="PHP">
        $papa = array(
          'prenom' => 'Christian',
          'nom' => 'Muyshond',
          'age' => 58,
          'adresse' => 'rue du pont de l\'origine',
          'numeroRue' => 35,
          'codePostal' => 7180,
          'ville' => 'Seneffe',
          'fumeur' => false,
          'sportif' => false,
          'gluten' => false,
          'hobbies' => array( 'plaisance', '2ememain', 'films et séries TV')
        );
        $moi = array(
          'prenom' => 'Daniel',
          'nom' => 'Muyshond',
          'age' => 28,
          'adresse' => 'rue Léon Bernus',
          'numeroRue' => 46,
          'codePostal' => 6000,
          'ville' => 'Charleroi',
          'fumeur' => false,
          'sportif' => true,
          'gluten' => false,
          'hobbies' => array( 'photographie', 'guitare', 'VTT'),
          'papa' => $papa
        );

        $toi = array(
          'prenom' => 'Ame',
          'nom' => 'Soeur',
          'age' => '28',
          'adresse' => 'rue Léon Bernus',
          'numeroRue' => 46,
          'codePostal' => 6000,
          'ville' => 'Charleroi',
          'fumeur' => false,
          'sportif' => true,
          'gluten' => false,
          'hobbies' => array('guitare', 'chant', 'cuisine')
        );
      </pre>
      <span class="resultat">Résultat :</span><br>
      <pre><?php print_r($moi); ?></pre>
    </p>
    <h3>Trouve la fonction PHP qui permette de compter le nombre d'éléments d'un tableau.Afficher le nombre d'hobby de $papa. Compte tes propres hobbies.
Additionne les deux et affiche le résultat.</h3>
    <p class="exo">
      <pre class="PHP">
        $nbrHobbyPapa = count($papa['hobbies']);
        echo "Nombre de hobbies de \$papa :  $nbrHobbyPapa&#60;br&#62;";
        $nbrHobbyMoi = count($moi['hobbies']);
        echo "Nombre de hobbies de \$moi :  $nbrHobbyPapa&#60;br&#62;";
        $addhobbies = $nbrHobbyPapa + $nbrHobbyMoi;
        echo "Addition : $addhobbies";
      </pre>
      <span class="resultat">Résultat :</span><br>
      <?php
        $nbrHobbyPapa = count($papa['hobbies']);
        echo "Nombre de hobbies de \$papa :  $nbrHobbyPapa<br>";
        $nbrHobbyMoi = count($moi['hobbies']);
        echo "Nombre de hobbies de \$moi :  $nbrHobbyPapa<br>";
        $addhobbies = $nbrHobbyPapa + $nbrHobbyMoi;
        echo "Addition : $addhobbies";
      ?>
    </p>
    <h3>la bonne syntaxe pour ajouter le hobby "Taxidermie" à ton tableau de "hobbies".</h3>
    <p class ="exo">
      <pre class="PHP">array_push(\$moi['hobbies'], 'Taxidermie');</pre>
      <?php
        array_push($moi['hobbies'], 'Taxidermie');
        // print_r($moi['hobbies'][3]);
      ?>
    </p>
    <h3>Remplacer ton nom de famille par Dieudonné</h3>
    <p class="exo">
      <pre class="PHP">$moi['prenom'] = 'Dieudonné';</pre>
    </p>
    <h3>Intersection des hobbies en commun</h3>
    <p class="exo">
      <pre>$enfant = array_intersect($moi['hobbies'], $toi['hobbies']);&#60;br&#62;print_r($enfant);</pre>
      <?php
        $enfant = array_intersect($moi['hobbies'], $toi['hobbies']);
        print_r($enfant);
      ?>
    </p>
    <h3>Fusion (tous les hobbies de chaque array)</h3>
    <p class="exo">
      <pre class="PHP">
        $fusHobbies = array_merge($moi['hobbies'], $toi['hobbies']);
        print_r($fusHobbies);
      </pre>
    <?php
      $fusHobbies = array_merge($moi['hobbies'], $toi['hobbies']);
      print_r($fusHobbies);
    ?>
    </p>
    <h3>
      Créer un tableau $web_development contenant une clef "frontend" et une clef "backend". À chaque clef, associe un sous-tableau vide.<br>
      ensuite, ajouter une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "xhtml".<br>
      ensuite, ajouter une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "Ruby on Rails".<br>
      ensuite, ajouter une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "CSS".<br>
      ensuite, ajouter une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "Flash".<br>
      ensuite, ajouter une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "Javascript".<br>
      ensuite, ajouter une ligne en dessous qui remplace la ligne contenant "xhtml" par "html".<br>
      ensuite, ajouter une ligne en dessous qui efface la ligne contenant "Flash".
    </h3>
    <p class"exo">
      <pre class="PHP">
        print_r($web_development);
      </pre>
      <?php
        $web_development = array(
          'frontend' => array(),
          'backend' => array()
        );
        array_push($web_development['frontend'], 'xhtml');
        array_push($web_development['backend'], 'Ruby on Rails');
        array_push($web_development['frontend'], 'CSS');
        array_push($web_development['frontend'], 'Flash');
        array_push($web_development['frontend'], 'Javascript');
        $web_development["frontend"][0] = "html";
        unset($web_development['frontend'][2]);
       ?>
       <span class="resultat">Résultat :</span><br>
       <pre><?php print_r($web_development);  ?></pre>
    </p>


   </body>
 </html>
