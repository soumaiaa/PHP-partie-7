
    
<?php
// if (isset($_POST['lastname']) && ($_POST['firstname'])&&($_POST['gender']) !== '') {
     
//             echo 'Nom : '.$_POST['lastname'].'<br/>';
//             echo 'Prénom : '.$_POST['firstname'].'<br/>';
//             echo 'Civilité : '.$_POST['gender'];
        
//     };
 
function isPost($parameter, $form){
       if (isset($_POST[$parameter])){
    
               return $_POST[$parameter];
     
       } else {
           return $form;
       };
   };



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form id="myForm" action="./index.php" method="post">
        <label for="gender">Civilité :</label>
        <select name="gender">
            <option value=""></option>
            <option value="male">Mr.</option>
            <option value="female">Mme.</option>
        </select><br>

        <label for="lastname">Nom :</label>
        <input name="lastname" type="text"><br>

        <label for="firstname">Prénom :</label>
        <input name="firstname" type="text"><br>

        <label for="sendfile">Fichier :</label>
        <input name="sendfile" type="file" accept=".pdf"><br>

        <button type="submit">Envoyer</button>

    </form> -->
  

    <form action="index.php" method="post">
        <p>Civilité : 
            <?= isPost("civility",
                '<select name="civility">
                <option value=""></option>
                <option value="Mr">Monsieur</option>
                <option value="Mme">Madame</option>
                </select>'); 
            ?>
        </p>
        <p>Votre prénom : <?= isPost("firstname", '<input type="text" name="firstname" />') ?></p>
        <p>Votre nom: <?= isPost("lastname", '<input type="text" name="lastname" />') ?></p>
        <p>Pièce jointe : <?= isPost("avatar", '<input name="sendfile" type="file" accept=".pdf">') ?></p>
        <p><button type="submit">Envoyer</button></p>

    </form>  
</body>
</html>