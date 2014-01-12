<?php
include_once 'include/connection.inc.php';

if (isset($_GET['ID']))
{
    $id=$_GET['ID'];//recupere l'id de la page
    $sql = "DELETE FROM article WHERE IDarticle = $id ";   //supprime la ligne ou contiens l'id recupere dans la table article
    mysql_query($sql);   
    $sql = "DELETE FROM commentaire WHERE articleID = $id ";    //supprime la ligne ou contiens l'id recupere dans la table commentaire
    mysql_query($sql);   
     
    header("location: index.php");//renvoie a la page d'accueil car c'est juste pour faire deux requêtes

?>
