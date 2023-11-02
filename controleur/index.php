<?php
    include '../Model/contact.php';

if(isset($_POST['Enregistrer'])){
    $Nom=$_POST['Nom'];
    $Prenom=$_POST['Prenom'];
    $Numero_tel=$_POST['Numero_tel'];
    $favori=$_POST['favori'];
    $number="SELECT * FROM contact WHERE Numero_tel='$Numero_tel'";
    $numberexist=$sqlbase->query($number)->fetch();

    if (empty($Nom)||empty($Prenom)||empty($Numero_tel)||empty($favori)){
        echo"tous les champs sont obligatoirs";
    }elseif($numberexist){
     echo"numero telephone exist déja";
    }else{
        $contact= new Contact ($Nom,$Prenom,$Numero_tel,$favori);
        $contact->Insertion($sqlbase);
        //echo"contact bien enregistré";
    }
}
if(isset($_POST['Modifier'])){
    $Nom=$_POST['Nom'];
    $Prenom=$_POST['Prenom'];
    $Numero_tel=$_POST['Numero_tel'];
    $favori=$_POST['favori'];
    if (empty($Nom)||empty($Prenom)||empty($Numero_tel)||empty($favori)){
        echo"tous les champs sont obligatoirs";
    }else{
        $modif= new Contact($Nom,$Prenom,$Numero_tel,$favori);
        $modif->modifiercontact($sqlbase,$_GET['id']);
        echo"contact bien modifier";
    }
}
if(isset($_POST['Supprimer'])){
    $id=$_POST['idContact'];
   
    Contact::supprimercontact($sqlbase,$id);
    echo"contact supprimer avec succés";
   
}

?>