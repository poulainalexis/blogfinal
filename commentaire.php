<?php

require_once 'include/connection.inc.php';
include_once 'include/header.inc.php';
require_once 'libs/smarty.class.php';
$smarty = new Smarty();
$id = $_COOKIE['articleid'];//recupere l'id de l'article via le cookie cree

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    setcookie('articleid', $id, time() + 15 * 60);// cree un cookie de 15 min qui stock id de l'article qui est recupere via l'url losque qu'il clique sur commentaire
}
if (isset($_POST['ajouter'])) {//va recupere les valeurs des champs de du code html
    $lepseudo = $_POST['pseudo'];
    $email = $_POST['Email'];
    $lecommentaire = $_POST['commentaires'];
    // creation de la requete apartir des informations fournie
    $sql = "INSERT INTO `commentaire`(`Texte`,`pseudo`,`email`,`articleID`) VALUES ('$lecommentaire','$lepseudo','$email','$id')";
    mysql_query($sql);
    header("location: commentaire.php");//retourne l'utilisateur a la page commentaire pour lui faire voir son commentaire
}

mysql_select_db('commentaire', $db);// le $db viens la page connection.inc.php ce db est une valeur qui est envoyé pour permettre de se connecter a la table commentaire
$sql = "SELECT `Texte`,`pseudo`, `email`, `articleID` FROM `commentaire` WHERE articleID=$id";
$resulta = mysql_query($sql); // fait une demande a la bdd
//$data = mysql_fetch_array($resulta); //recupere le nombre d'article de la bdd qui peuvent etre publier

$data = mysql_fetch_assoc($resulta);


if (!empty($data)) {
    while ($data = mysql_fetch_assoc($resulta)) {
        $data_table[] = $data;
        $smarty->assign('Com', $data_table); //envoie les valeurs dans le fichier accueil.tpl
    }
} else {

    $data_table[] = null;
    $smarty->assign('Com', $data_table); //envoie les valeurs dans le fichier accueil.tpl
}

$smarty->display('template/Commentaire.tpl'); //appele la page template
//$smarty->display('template/Commentaire.tpl');

include_once 'include/principale.inc.php';

//echo' <div class="span8">';

include_once 'include/footer.inc.php';
//echo '</div>';
?>
