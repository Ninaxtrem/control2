<?php

//partie connexion//
$user = "root";
$pass = "";

try {
    $bdd = new PDO('mysql:host=localhost;dbname=control;charset=utf8', $user, $pass);
  
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>