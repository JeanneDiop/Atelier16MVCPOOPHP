<?php
// require_once ('../Model/contact.php');
require_once ('../controleur/index.php');
$tableau=Contact::Liste_Contacts($sqlbase);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form2.css">
</head>
<body>
<h1>Gestion Conctats</h1><Br>
<form action="form.php" metho="POST">
    <button type="submit" name="ajoutnouveaucontact">Ajouter un nouveau contact</button>
</form>
<?php if(is_array($tableau) && count($tableau)>0) {?>
        <table style="border:1px solid black;">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Numero_tel</th>
            <th>favori</th>
            <th>Button</th>
        </tr>
     <?php foreach($tableau as $tab){?>
        <tr>
            <td style="border:1px solid black;"><?=$tab['Nom']?> </td>
            <td style="border:1px solid black;"><?=$tab['Prenom']?></td>
            <td style="border:1px solid black;"><?=$tab['Numero_tel']?></td>
            <td style="border:1px solid black;"><?=$tab['favori']?></td>
            <td> 
                <!-- <button type="Submit" name="Modifier">Modifier</button> -->
                <form action="" method="post">
                    <button type="submit" name="Supprimer">Supprimer</button>
                    <input type="hidden" name="idContact" value="<?= $tab['id']?>">
                    <a href="../Vue/formmodif.php?id=<?= $tab['id'] ?>">Modifier</a>
                </form>
                
                <!-- <input type="Submit" name="Modifier" value="Modifier"> 
                <input type="submit" name="Supprimer" value="Supprimer">
                <input type="submit" name="Enregistrer" value="Enregistrer"> -->
            </td>
        </tr>
       
        <?php }?>
        </table>
    <?php } ?>     
</body>
</html>