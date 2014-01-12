<?php



unset($_COOKIE['sid']);//recupere le sid de la connexion de l'utilisateur qui est generer automatique sur la page connectionID
setcookie('sid',NULL,-1);  // verifier 
//code pour permettre de deconnecter

header("location: index.php");


?>
