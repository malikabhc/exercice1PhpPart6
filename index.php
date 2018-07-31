<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1/6</title>
  </head>
  <body>
    <!-- exo01-6/?lastname=Nemare&firstname=Jean -->
      <?php
        if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
        echo $_GET['firstname'] . ' ' . $_GET['lastname'];
      }
      ?>
  </body>
</html>
