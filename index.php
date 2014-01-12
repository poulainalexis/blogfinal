<?php

require_once 'include/connection.inc.php'; //appelle la page connection

include_once 'include/header.inc.php'; //appelle l'entête de du site
require_once 'libs/smarty.class.php'; //appelle la classe Smarty
$smarty = new Smarty(); //initialise un objet 
$data_tab = array(); //initialise un tableau
$nbArticleParPage = 2; //nombre d'article maxi par page  
$total = 0; //initialise pour le nombre d'article au total que la bbd envoie
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

//*******************************************affiche par recherche*******************************************************
if (isset($_GET['votre_recherche'])) {//recupere le mot de la recherche dans l'adresse url
    $recherche = $_GET['votre_recherche'];//le met dans une variable

    $sqlcount = "SELECT COUNT(*) as nbarticle from article where Publier=1 and (Titre like '%$recherche%' or Texte LIKE '%$recherche%')"; // recherhe les mot dans la bdd pour les afficher
    $requete = mysql_query($sqlcount); // fait une demande de recherche a la bdd
    $data1 = mysql_fetch_array($requete); //recupere le nombre d'article de la bdd qui peuvent etre publier
    $total = $data1['nbarticle'];//le met dans une variable

    if ($total > 0) {

        echo "<p>il y $total articles dans votre recherche<br>";
    } else {
        echo 'aucune recherche est trouver';
    }
} else {

    //****************************************affichage toute les artiches qui peuvent etre publier ****************************************************

    $sql = "SELECT COUNT(*) as nbarticle from article where Publier=1"; //article qui doivent etre publier aparti de la bbd
//-----------------mise en forme dans le principal des articles-------------------




    $result = mysql_query($sql); // fait une demande a la bdd
    $data = mysql_fetch_array($result); //recupere le nombre d'article de la bdd qui peuvent etre publier
    $total = $data['nbarticle'];
}// ++++++++++++fin du else d'affiche des articles-+++++++++


echo' <div class="span8">';

echo' 
<p>
<center>';

$nbTotalDePage = ceil($total / $nbArticleParPage); //nombre de page (maxi 2 articles par page)
$debut = ($page - 1) * $nbArticleParPage;//multiplie par le nombre de page

$sqlpage = "SELECT IDarticle ,Texte, Titre , DATE_FORMAT(Date,'%d/%m/%y')as Date FROM article WHERE Publier= '1' ORDER BY Date DESC LIMIT $debut,$nbArticleParPage"; // creation de la requete pour demander les articles qui doivent etre publier
//-------------------- recupere tous les articles ------------------
utf8_encode($sqlpage);//ajoue a la requete que le format quelle devra fournir et en utf8 pour eviter les symbole bizare
$requete = mysql_query($sqlpage);// recupere les information de la bdd

//
// ----------------------------------fait une boucle pour recuperer les donnée--------------------------
while ($ligne = mysql_fetch_array($requete)) {
    $data_tab[] = $ligne; //contenu des articles
}
/* print_r($ligne);
  $compte="SELECT COUNT( * ) FROM commentaire WHERE articleID =$ligne";
  $com_compte = mysql_query($compte);
  $data_com = mysql_fetch_assoc($com_compte);
  $smarty->assign('nombre', $data_com); */

$smarty->assign('ligne', $data_tab); //envoie les valeurs dans le fichier accueil.tpl
$smarty->assign('IdOK', $valid_log); // envoie la valeur de connection dans le fichier accueil.tpl
$smarty->display('template/accueil.tpl');//va appeler la ou contien le code html



//------------------recupere le nom de votre recherche pour ensuite l'afficher le nombre de page par rapport au nombre d'article trouvé--------------
if (isset($_GET["votre_recherche"])) {
    for ($i = 1; $i <= $nbTotalDePage; $i++) {
        echo "<a href=index.php?page=$i&votre_recherche=$recherche>$i</a>";
    }
} else {
    echo"<br><p>";
    for ($i = 1; $i <= $nbTotalDePage; $i++) {
        echo "<a href=index.php?page=$i> $i  </a>";
    }
}


echo'</center> </div>';
echo '<div>';
include_once 'include/principale.inc.php';//appelle la page qui affiche les liens sur la droite
echo'</div>';
echo' <div class="span8">';

include_once 'include/footer.inc.php';// le bas de page
echo '</div>';
?>


