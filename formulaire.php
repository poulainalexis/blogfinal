
<?php

require_once '\include\connection.inc.php';
require_once 'libs/smarty.class.php';
$smarty = new Smarty(); //indensie un objet

error_reporting(0);

if ($valid_log == true) {// si la connexion utilisateur qui est effectuer dans ConnectionID est coorect alors il renvoie truepar valid_log
   
    
///***************************************************clique sur MODIFIER article*-************************************------------------******
   
    if (isset($_POST['MODIFIER'])) {//recupere le nom du bouton lorsque l'utilisateur clique desus

//-----------------recupere toutes les valeures qui on etait saisie dans les champs proposés----------
        $iid = $_POST['IDvaleur'];
        $leTitre = $_POST['leTitre'];
        $commentaire = $_POST['commentaires'];
        $date = date("y-m-d");
        $valide = (!empty($_POST['Valider'])) ? $_POST['Valider'] : 0;

        if (!empty($_POST['image'])) {

            $serveur_image = $_FILES['image']['error'];//pour les images qui sont recuperer de l'ordinateur de l'utilsateur
        } else {
            $serveur_image = "";//si l'utilisateur met pas de photo on fournir un champs vide
        }

        mysql_query($sql);//fait une requete pour recupere l'id de l'article
        $id = mysql_insert_id();
        move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$iid.jpg"); //insert une image

        $sql = "UPDATE article set Titre='$leTitre',Texte='$commentaire',date='$date' WHERE IDarticle='$iid' ";//cette requête permet de mettre a jours les champs de table déjà ecrite

        mysql_query($sql);

        header("location: index.php");//   renvoie l'utilisateur a la page d'accueil
    } else {


        //***************************************************clique sur ajouter article****************************** 
       // recupere tous les valeur des champs qui sont ce trouve dans le html a formul.tpl
        if (isset($_POST['Ajouter'])) {
            $leTitre = $_POST['leTitre'];
            $commentaire = $_POST['commentaires'];
            $date = date("y-m-d");
            $valide = (!empty($_POST['Valider'])) ? $_POST['Valider'] : 0;

            $sql = "INSERT INTO article (Titre,Texte,Date,Publier) VALUES('$leTitre','$commentaire','$date','$valide')";
            utf8_encode($sql);
        
            if (!empty($_POST['image'])) {

                $serveur_image = $_FILES['image']['error'];
            } else {
                $serveur_image = "";
            }

            mysql_query($sql);
            $id = mysql_insert_id();
            move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$id.jpg"); //insert une image
        } else {
        
            //-------------------------recupere le texte depuis la base de donée   ------------------ 
            if (isset($_GET['ID'])) {// recupere id dans l'url pour pouvoir modifier afin d'afficher les valeur dans les champs en html 
                
                $id = $_GET['ID'];
                $sql = "SELECT * FROM article WHERE article.IDarticle=$id ";
                $requete = mysql_query($sql);
                $data = mysql_fetch_array($requete);
                extract($data);
            } else {
                $data = array("IDarticle" => NULL, "Titre" => "", "Texte" => "", "Date" => "", "Publier" => "");//on met NULL a id article car c'est une autoincrement c'est la table qui choisie son numero
            }

            $action_label = (!empty($_GET['ID'])) ? 'MODIFIER' : 'Ajouter';

            include_once 'include/header.inc.php';

            $action_label = (!empty($_GET['ID'])) ? 'MODIFIER' : 'Ajouter';

            $smarty->assign('action_label', $action_label);
            $smarty->assign('data', $data);
            $smarty->display('template/formul.tpl'); //appele la page template


            include_once 'include/principale.inc.php';



            include_once 'include/footer.inc.php';
        }
    }
}
?>