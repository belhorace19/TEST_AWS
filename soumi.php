<?php
    //connexion à la base de donnée//

   $Obpdo= New PDO('mysql:host=localhost;dbname=my_data_base','root','');
   

   

   //verification du contenu de $_POST
   if(isset($_POST["NomPart"]) && !empty($_POST["NomPart"])
    && isset($_POST["PnomPart"]) && !empty($_POST["PnomPart"])
    && isset($_POST["ContaPart"]) && !empty($_POST["ContaPart"])
    && isset($_POST["EmailPart"]) && !empty($_POST["EmailPart"])
    ){
        //declaration des variable et recuperation du coontenu de $_POSTpar les variables//
        $nom=$_POST["NomPart"];
        $prenom=$_POST["PnomPart"];
        $contact=$_POST["ContaPart"];
        $email=$_POST["EmailPart"];

        //preparation de la requete d'insertion//
        
        $pdostar= $Obpdo->prepare("INSERT INTO participants (NomPart,PnomPart,ContaPart,EmailPart) VALUES(:nom,:prenom,:contact,:email)");

        // lions les marqueurs à des valeurs//
     
        $pdostar->bindValue(':nom', $nom , PDO::PARAM_STR);
        $pdostar->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $pdostar->bindValue(':contact', $contact, PDO::PARAM_INT);
        $pdostar->bindValue(':email', $email, PDO::PARAM_STR); 

       $result= $pdostar->execute();
       if($result){
        header("Location:formulaire.php");
       }else{
        $mesg="Houps, désolé échec de l'enregistrement";
       }
        
    }
    
  
   
       
            
?>
