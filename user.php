<?php
if (isset($_GET['nom"']) && $_GET['prenom'] !== '') {
    echo 'Nom : '.$_GET['nom'].'<br/>';
    echo 'Prénom : '.$_GET['prenom'].'<br/>';   
} 

if (isset($_POST['nom"']) && $_POST['prenom'] !== '') {
            echo 'Nom : '.$_POST['nom'].'<br/>';
            echo 'Prénom : '.$_POST['prenom'].'<br/>';   
        } 
 
       


?>
