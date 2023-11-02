<?php
include_once '../Controleur/index.php';
include_once '../Model/contact.php';

$modifcontact=Contact::getcontact($sqlbase,$_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un contact</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="tete" >
<div class="form1">
<form action="" method="post">
    <h1>Modifier un contact</h1>
        <label for="nom">Nom </label><br>
        <input type="text" id="nom" name="Nom" value="<?php echo $modifcontact['Nom'] ?>"><br><br>
        <label for="prenom">Prénom </label><br>
        <input type="text" id="prenom" name="Prenom" value="<?php echo $modifcontact['Prenom'] ?>"><br><br>
        <label for="numero">Numéro de tel </label><br>
        <input type="text" id="numero" name="Numero_tel" value="<?php echo $modifcontact['Numero_tel'] ?>"><br><br>
        <label for="favori">Favori </label><br>
        <select id="favori" name="favori" value="<?php echo $modifcontact['favori'] ?>">
            <option value="oui" <?php if($modifcontact['favori']=='oui') echo "selected" ?>>Oui</option>
            <option value="non" <?php if($modifcontact['favori']=='non') echo "selected" ?>>Non</option>
        </select><br><br>
        <!-- //<input class="buton" type="submit" value="Enregistrer" name="Enregister"> -->
        <button  class="buton" type="submit" name="Modifier">Modifier</button>
    </form>
</div>
</body>
</html>