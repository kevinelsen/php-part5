<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title> Exercice 10 </title>
</head>
<body>
  <?php

$departement[02] = 'Aisne';

$departement[59] = 'Nord';

$departement[60] = 'Oise';

$departement[62] = 'Pas-de-Calais';

$departement[80] = 'Somme';

foreach ($departement as $key => $value) {

  echo $key . ' ' . $value . ' ';
}

?>
  </body>
  </html>
