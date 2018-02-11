<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Becode Charleroi - Turing v4 - Daniel Muyshond - PHP - Les fonctions</title>
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
    <h2>Les fonctions</h2>
    <h3>Utilise une fonction qui mette la première lettre de l'argument en majuscule. Par ex: si l'input de la fonction est "emile", l'output sera "Emile".</h3>
    <p class="exo">
      <pre class="PHP">
        $inputMaj = $_POST['inputmajuscule']
        echo ucfirst($inputMaj);
      </pre>
      <span class="resultat">Résultat :</span><br>
      <form class="emile" action="fonctions.php" method="post">
        <input type="text" name="inputmajuscule">
        <input type="submit" name="submit">
      </form>
      <?php
      if (isset($_POST['inputmajuscule'])) {
        $inputMaj = $_POST['inputmajuscule'];
        echo ucfirst($inputMaj);
      }
       ?>
    </p>
    <h3>Utilise la fonction fournie par PHP te permettant d'afficher l'année en cours.</h3>
    <p class="exo">
      <pre class="PHP">
        date(Y);
      </pre>
      <span class="resultat">Résultat :</span><br>
      <?php
        echo date('Y');
       ?>
    </p>
    <h3>Affiche à présent la date, l'heure, les minutes et les secondes, en utilisant la même fonction.</h3>
    <p class="exo">
      <pre class="PHP">
        echo 'Nous sommes le ' . date('d/m/y') . '&#60;br&#62;';
        echo 'Il est ' . date('h') . 'heure(s)&#60;br&#62;';
        echo 'passé de ' . date('i') . 'minute(s)&#60;br&#62;';
        echo 'et de ' . date('s') . 'seconde(s)&#60;br&#62;';
      </pre>
      <span class="resultat">Résultat :</span><br>
      <?php
        echo 'Nous sommes le ' . date('d/m/y') . '<br>';
        echo 'Il est ' . date('h') . 'heure(s)<br>';
        echo 'passé de ' . date('i') . 'minute(s)<br>';
        echo 'et de ' . date('s') . 'seconde(s)<br>';
       ?>
    </p>
    <h3>Crée une fonction prenant deux arguments numériques et qui retourne la somme de ces deux arguments.</h3>
    <p class="exo">
      <pre class="PHP">
        function additionne($nb1, $nb2) {
          $resultat = $nb1+$nb2;
          echo $resultat;
        }
        if (isset($_POST['argument1']) AND isset($_POST['argument2'])) {
        additionne($_POST['argument1'], $_POST['argument2']);
        }
      </pre>
      <span class="resultat">Résultat :</span>
      <form class="fctadd" action="fonctions.php" method="post">
        Nombre 1 : <input type="text" name="argument1"> Nombre 2 : <input type="text" name="argument2">
        <input type="submit" name="Additionner">
      </form>
      <?php
      function additionne($nb1, $nb2) {
        if (is_numeric($nb1) AND is_numeric($nb2)) {
        $resultat = $nb1+$nb2;
        echo $resultat;
        }
        else {
          echo "Veuillez n'entrer que des chiffres ou nombres.";
        }
      }
      // $argument1 = $_POST['argument1'];
      // $argument2 = $_POST['argument2'];
      if (isset($_POST['argument1']) AND isset($_POST['argument2'])) {
      additionne($_POST['argument1'], $_POST['argument2']);
    }
       ?>
    </p>
    <h3>Améliore la fonction précédente pour que si l'un des (ou les deux) arguments envoyés n'est pas une valeur numérique (int), la fonction retourne le message suivant: "Erreur, argument non numérique".</h3>
    <p class="exo">Done.</p>
    <h3>Crée une fonction qui prend en argument une chaîne de caractères (plusieurs mots) et qui retourne les initiales de chaque mot en majuscule. (Exemple: "In code we trust!" devient: ICWT).</h3>
    <p class="exo">
      <pre class="PHP">

      </pre>
      <span class="resultat">Résultat :</span>
      <?php

       ?>
    </p>
    <h3>Invente une fonction qui remplace les lettres "a" et "e" par le caractère "æ" dans chacune des chaînes suivantes: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca".</h3>
    <p class="exo">
      <pre class="PHP">

      </pre>
      <span class="resultat">Résultat :</span>
      <?php

       ?>
    </p>
    <h3>Crée la fonction inverse, qui remplace le caractère "æ" par "ae" dans les chaines suivantes: cæcotrophie, chænichthys, microsphæra, sphærotheca</h3>
    <p class="exo">
      <pre class="PHP">

      </pre>
      <span class="resultat">Résultat :</span>
      <?php

       ?>
    </p>
    <h3>Crée une fonction te permettant de gérer des messages envers l'utilisateur grâce à deux arguments: le premier argument est le message, le second permet de spécifier un attribut de classe html qui sera utilisée par le CSS (par exemple: "info", "error", "warning"). Grâce à cette fonction, on pourra écrire en php:</h3>
    <p class="exo">
      <pre class="PHP">

      </pre>
      <span class="resultat">Résultat :</span>
      <?php

       ?>
    </p>
  </body>
</html>
