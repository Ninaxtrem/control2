<?php 
 include "traitement.php";


 $nom = $_POST['nom'];
 $mail = $_POST['email'];
 $mdp = $_POST['mdp'];



$mdp = password_hash ($mdp, PASSWORD_DEFAULT);
  

$sql = "SELECT * FROM ex_inscription WHERE nom_utilisateur = :nom_utilisateur";
$requete= $bdd->prepare($sql);
$requete->execute(array(
":nom_utilisateur"=> $nom));

$count = $requete->rowCount();

if($count == 0){

     $sql1 = "SELECT * FROM ex_inscription WHERE mail_utilisateur = :mail_utilisateur";
     $requete1= $bdd->prepare($sql1);
     $requete1->execute(array(
         ':mail_utilisateur'=>$mail
     ));

     $resultat1 =$requete1->fetch();
     
     $countmail = $requete->rowCount();
    
    if($countmail == 0){
         
         if($mail !== $resultat1['mail_utilisateur']){
                
            $sql = "INSERT INTO ex_inscription (nom_utilisateur, mail_utilisateur, mdp_utilisateur, roles_utilisateur) VALUES (:nom_utilisateur, :mail_utilisateur, :mdp_utilisateur, '0')";
                            $requete= $bdd->prepare($sql);
                            $requete->execute(array(
                                ':nom_utilisateur'=> $nom,
                                ':mail_utilisateur'=> $mail,
                                ':mdp_utilisateur'=> $mdp,
                            ));
                         
                        
                        
                        
                                 header("location: connection.php?message=sucess");
                                 exit();
                                 
 }else{
    header("location:inscription.php?message=error");
 }

}else{
    header("location:inscription.php?message=error2");
}

}else{ 
    header("location: inscription.php?message=error3");
}

