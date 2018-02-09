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
     <title>Les tableaux</title>
   </head>
   <body>
     <h1>Les tableaux</h1>
     <h3>Crée un array représentant ta famille</h3>
     <p><?php print_r($famille) ; ?></p>
     <h3>Crée un array décrivant tes plats préférés</h3>
     <p><?php print_r($plats) ; ?></p>
     <h3>Crée un array décrivant tes films et séries préférés</h3>
     <p><?php print_r($film) ; ?></p>
     <h3>Afficher uniquement ton film préféré</h3>
     <p><?php  print_r($film[1]) ; ?></p>
     <h3>Décris-toi dans une tableau $moi. Utilise au moins deux valeurs de chaque type (texte, booléenne, Int).<br>
      Rajoute tes hobbies sous forme de tableau dans ton tableau. Crée un deuxième tableau similaire qui décrive ton papa et ses hobbies.<br>
      À ton tableau $moi, ajoute un élément 'papa' dont la valeur équivaut à $papa. Affiche le contenu de $moi via print_r().
      </h3>
      <p><pre><?php print_r($moi) ?></pre></p>
      <h3>Trouve la fonction PHP qui permette de compter le nombre d'éléments d'un tableau.Afficher le nombre d'hobby de $papa. Compte tes propres hobbies.
Additionne les deux et affiche le résultat.</h3>
      <p><pre>count()</pre><p>
      <p>
        <?php
          $nbrHobbyPapa = count($papa['hobbies']);
          echo "Nombre de hobbies de \$papa :  $nbrHobbyPapa<br>";
          $nbrHobbyMoi = count($moi['hobbies']);
          echo "Nombre de hobbies de \$moi :  $nbrHobbyPapa<br>";
          $addhobbies = $nbrHobbyPapa + $nbrHobbyMoi;
          echo "Addition : $addhobbies";
        ?>
        <h3>la bonne syntaxe pour ajouter le hobby "Taxidermie" à ton tableau de "hobbies".</h3>
        <?php
          array_push($moi['hobbies'], 'Taxidermie');
          // print_r($moi['hobbies'][3]);
          ?>
          <pre>array_push(\$moi['hobbies'], 'Taxidermie');</pre>

        <h3>Remplacer ton nom de famille par Dieudonné</h3>
          <pre>$moi['prenom'] = 'Dieudonné';"</pre>
         <h3>Intersection des hobbies en commun</h3>
          <pre>$enfant = array_intersect($moi['hobbies'], $toi['hobbies']);
            print_r($enfant);</pre>
        <?php
          $enfant = array_intersect($moi['hobbies'], $toi['hobbies']);
          print_r($enfant);
        ?>
          <h3>Fusion (tous les hobbies de chaque array)</h3>
          <?php
          $fusHobbies = array_merge($moi['hobbies'], $to['hobbies']);
          ?>

      </p>
   </body>
 </html>
