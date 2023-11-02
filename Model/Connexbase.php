<?php
class Connexbase {
     public $host="localhost";
     public $dbname="atelier16mvc";
     public $user="root";
     public $password="";
     public static function consulterbase(){
            try {
                //Cette ligne de code crée une nouvelle instance de la classe PDO, qui est utilisée pour interagir avec une base de données MySQL
                // PDO c'est un objet qui nous permet de se connecter à la base de donnée
                $base = new PDO("mysql:host=localhost; dbname=atelier16mvc","root", "");
                return $base;
            } catch (PDOException $e) { //Cela permet de gérer l'erreur
               echo "Erreur connexion: ".$e->getMessage();//afficher les messages d'erreur 
            }
        }
    }
    $con=new Connexbase();
    $sqlbase=$con->consulterbase();
?>