<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>
<!-- ## Exercice 1
Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **GET**. -->
<form action="./user.php" method='get'>
  <label for="nom">Votre nom:</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="prenom">Votre prenom:</label><br>
  <input type="text" id="prenom" name="prenom"><br><br>
  <input type="submit" value="Submit">
</form> 
<!-- ## Exercice 2
Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **POST**.   -->
<form action="./user.php" method='post'>
  <label for="nom">Votre nom:</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="prenom">Votre prenom:</label><br>
  <input type="text" id="prenom" name="prenom"><br><br>
  <input type="submit" value="Submit">
</form> 





</body>
</html>