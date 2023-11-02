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
<form action="../controleur/index.php" method="post">
    <h1>Ajouter un contact</h1>
        <label for="nom">Nom </label><br>
        <input type="text" id="nom" name="Nom"><br><br>
        <label for="prenom">Prénom </label><br>
        <input type="text" id="prenom" name="Prenom"><br><br>
        <label for="numero">Numéro de tel </label><br>
        <input type="text" id="numero" name="Numero_tel"><br><br>
        <label for="favori">Favori </label><br>
        <select id="favori" name="favori">
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select><br><br>
        <!-- //<input class="buton" type="submit" value="Enregistrer" name="Enregister"> -->
        <button  class="buton" type="submit" name="Enregistrer">Enregistrer</button>
    </form>

    <div>
    <form action="form2.php" metho="POST">
        <button type="submit">Voir liste contact</button>
    </form>
    </div>
</div>
</body>
</html>

