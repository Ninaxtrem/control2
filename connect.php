<?php
include "traitement.php";


$mail = $_POST['email'];
$mdp = $_POST['password'];


$sql1 = "SELECT * FROM ex_inscription WHERE mail_utilisateur = :mail_utilisateur";
$requete1= $bdd->prepare($sql1);
$requete1->execute(array(
    ':mail_utilisateur'=>$mail,
));

$count = $requete1->rowCount();

if ($count == 1 ){

    while ($resultat = $requete1->fetch()){
        $mdpbb = $resultat['mdp_utilisateur'];    
        if (password_verify($mdp, $resultat['mdp_utilisateur'])) {
            session_start();
            $_SESSION['id'] = $resultat['id_utilisateur'];
            $_SESSION['nom'] = $resultat['nom_utilisateur'];
         
            header("location:index.php?message=success");
            
        } else{
            
        }
    }

}
else{
    header("location:connection.php?message=error");
}
