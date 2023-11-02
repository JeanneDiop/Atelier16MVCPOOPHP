<?php
require_once '../Model/Connexbase.php';

class Contact{
    private $Nom;
    private $Prenom;
    private $Numero_tel;
    private $favori;
    public function __construct($Nom,$Prenom,$Numero_tel,$favori){
        $this->setNom($Nom);
        $this->setPrenom($Prenom);
        $this->setNumero_tel($Numero_tel);
        $this->setFavori($favori);
    }
    public function getNom(){
        return $this->Nom;
    }
    public function setNom($Nom){
        if(is_string($Nom)){
            $this->Nom=$Nom;;
        }else{
            throw new Exception("Le nom doit etre une chaine de caractere");
        }
    }
    public function getPrenom(){
        return $this->Prenom; 
    }
    public function setPrenom($Prenom){
        if(is_string($Prenom)){
            $this->Prenom=$Prenom;  
        }else{
            throw new Exception("Le prenom doit etre une chaine de caractere");
        }
    }
    public function getNumero_tel(){
        return $this->Numero_tel;
    }
    public function setNumero_tel($Numero_tel){
        if(preg_match('/^(77|76|78|75|70)+[0-9]/',$Numero_tel)){
            $this->Numero_tel=$Numero_tel;
        }else{
            throw new Execption("numero invalide");
        }
    }
    public function getFavori(){
        return $this->favori;
    }
    public function setFavori($favori){
        if($favori=="oui" ||$favori=="non"){ 
            $this->favori=$favori;   
        }else{ 
    }
}
public function Insertion($sqlbase){
    $insert="INSERT INTO contact(Nom,Prenom,Numero_tel,favori) 
            VALUES('$this->Nom','$this->Prenom','$this->Numero_tel','$this->favori')";
            $sqlbase->query($insert);
            echo "contact bien enregistré";
   }
   public static function Liste_Contacts($sqlbase){
        $mysql= "SELECT * FROM contact";
        $contact=$sqlbase->query($mysql);
        if ($contact){
            $re=$contact->fetchALL(PDO::FETCH_ASSOC);
            return $re;
        }else{
            return $re=[];
        }
    }
    public static function getcontact($sqlbase,$idC){
        $getcontact="SELECT * FROM contact Where id=$idC";
        $resultget=$sqlbase->query($getcontact)->fetch();
        return $resultget;
        
    }
    public function modifiercontact($sqlbase,$id){
        $modif="UPDATE contact SET Nom='$this->Nom',Prenom='$this->Prenom',Numero_tel='$this->Numero_tel',favori='$this->favori' Where id=$id"; 
        $modifcontact=$sqlbase->query($modif);
        
        if($modifcontact){
        echo"modification valider";
        }else{
        echo "modification invalide";
        }
    }
    public static function supprimercontact($sqlbase,$id){
        $supprimer="DELETE FROM contact WHERE id=$id";
        $supprimercontact=$sqlbase->query($supprimer);

        if($supprimercontact){
            echo"suppression conctat reussi";
        }else{
            echo"suppression contact non reussi";
        }
    }
   public static function favorisercontact($sqlbase,$id){
    $favoriser="UPDATE contact SET favori='oui' Where id=$id";
    $favorisercontact=$sqlbase->query($favoriser);
    if($favorisercontact){
        echo"le contact est favorisé";
    }else{
        echo"le contact n'est pas favorisé";
    }
   }
   }
?> 

