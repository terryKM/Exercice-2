<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>convert1</title>
    <meta name="description" content="">
</head>
<body>

<h3>convertisseur d'euros en dollar</h3>

<form  method="POST" name="convertisseur">
    <input type="text" placeholder="Montant en euros" name="valeur" id="valeur">
    <input type="submit" name="validate" value="Envoyer">
</form>

</body>
</html>
<?php

if(isset($_POST['validate'])) {

    $valeur = $_POST['valeur'];
    $resultat = $_POST['valeur']/0.9208399902390961;

    echo ($valeur." "."Euros"." "."="." ".$resultat." "."Dollars");



}

?>

