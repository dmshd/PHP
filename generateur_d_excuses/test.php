<?php
ini_set('display_errors', 1);
if(empty($_POST['nomEnfant']) OR empty($_POST['nomInstit']) OR empty($_POST['raison']))
{
  echo "Fill all fields!";
}
elseif(isset($_POST["raison"]) AND (strlen($_POST["nomEnfant"]) > 0) AND (strlen($_POST["nomInstit"]) > 0))
{
  $nom = $_POST['nomEnfant'];
  $prof = $_POST['nomInstit'];
  $pourquoi = $_POST['raison'];
  $excuse = "<p>Cher $prof, je vous prise d'excuser l'absence de $nom du jour. En effet, $nom a été contraint de manquer les cours en raison $pourquoi. <br>
  Nous vous prions de l'en excuser.<br></p>";
  echo $excuse;
}

?>
