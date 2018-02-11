 <html>
   <head>
     <title>Becode Charleroi - Turing v4 - Daniel Muyshond - PHP - La structure switch</title>
   <link rel="stylesheet" href="styles/style.css">
   </head>
   <?php
    ini_set('display_errors', 1);

    ?>

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
     <h2>La structure "Switch"</h2>
     <h3>Retour à l'école de l'échec et du jugement (sans if/else)</h3>
   <br>
   <p class="exo">
     <pre class="PHP">
       if (isset($_GET['note'])) {
         $note = $_GET['note'];
          switch ($note) {
            case 1:
            case 2:
            case 3:
              echo "&#60;p&#62;Ce travail est nul&#60;/p&#62;";
              break;
            case 6:
            case 7:
            case 8:
            case 9:
              echo "&#60;p&#62;Ce travail n'est pas terrible.&#60;/p&#62;";
              break;
            case 10:
              echo "&#60;p&#62;Tout juste !&#60;/p&#62;";
              break;
            case 11:
            case 12:
            case 13:
            case 14:
              echo "&#60;p&#62;C'est pas mal ! &#60;/p&#62;";
              break;
            case 15:
            case 16:
            case 17:
            case 18:
              echo "&#60;p&#62;Bravo&#60;/p&#62;";
              break;
            case 19:
            case 20:
              echo "&#60;p&#62;Police ! Arrêtez ce tricheur !&#60;/p&#62;";
              break;
              default;
              echo "&#60;p&#62;Merci d'indiquer une note ...&#60;/p&#62;";
          }
       }
     </pre>
     <form method="get" action="conditions-switch.php">
       <br>Quelle note sur 20 as-tu reçu ? <br> <input type="number" name="note"><br>
       <br> <input type="submit" value="Submit">
       <?php
       if (isset($_GET['note'])) {
         $note = $_GET['note'];
          switch ($note) {
            case 1:
            case 2:
            case 3:
              echo "<p>Ce travail est nul</p>";
              break;
            case 6:
            case 7:
            case 8:
            case 9:
              echo "<p>Ce travail n'est pas terrible.</p>";
              break;
            case 10:
              echo "<p>Tout juste !</p>";
              break;
            case 11:
            case 12:
            case 13:
            case 14:
              echo "<p>C'est pas mal ! </p>";
              break;
            case 15:
            case 16:
            case 17:
            case 18:
              echo "<p>Bravo</p>";
              break;
            case 19:
            case 20:
              echo "<p>Police ! Arrêtez ce tricheur !</p>";
              break;
           case($note > 20):
             echo "<p>Vous ne pouvez pas avoir obtenu plus de 20/20 !</p>";
              default;
              echo "<p>Merci d'indiquer une note ...</p>";
          }
       }
        ?>
     </form>
   </p>
   </body>
 </html>
