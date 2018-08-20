<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1/6</title>
  </head>
  <body>
    <!-- exo01-6/?lastname=Nemare&firstname=Jean -->
      <?php
      // $_GET -> variable superglobale
        if (!empty($_GET['firstname']) && !empty($_GET['lastname'])) {
        echo $_GET['firstname'] . ' ' . $_GET['lastname'];
      } else {
        echo 'Veuillez vérifier les paramètres d\'URL';
      }
      ?>
  </body>
</html>
