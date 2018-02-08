 <html>
   <head><title>Hi!</title>
   <link rel="stylesheet" href="styles/style.css">
   </head>
   <?php
    ini_set('display_errors', 1);
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
       default;
       echo "<p>Merci d'indiquer une note ...</p>";
   }
}
    ?>
   <body>
   <br>
   <p>
     <form method="get" action="conditions-switch.php">
       <br>Quelle note sur 20 as-tu reçu ? <br> <input type="number" name="note"><br>
       <br> <input type="submit" value="Submit">
     </form>
   </p>
   </body>
 </html>
