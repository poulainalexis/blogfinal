<?php
require_once 'include/connection.inc.php';
require_once 'libs/smarty.class.php';
$smarty = new Smarty();


if (isset($_COOKIE['sid'])) {// si un sid est deja present dans les cookie alors on lui indique qu'il est déjà connecter
    echo"vous etes deja connecter";


  
} else {

    if (isset($_POST['CONNECTION'])) {

        $EMAIL = $_POST['email'];
        $MDP = $_POST['mdp'];


        $sql = " SELECT * from connexion where (email like '%$EMAIL%' and mdp LIKE '%$MDP%')";
       
        $execut = mysql_query($sql);

        //---------------------- connection autoriser---------------   
        if ($resultat = mysql_fetch_array($execut)) {// si les informtions fournie dans les champs de connexion sont correct alors
            echo "connection ok";
            $sid = md5($resultat['email'] . time());// cree un sid automatique pour que un seul utilisateur peut etre connecter et mettre dans un cookie

            $sql = "UPDATE connexion set Sid='$sid' where email='$EMAIL'";//met a jours sont sid dans la table connexion

            setcookie('sid', $sid, time() + 15 * 60);// cree un cookie de 15 min avec son sid

            mysql_query($sql);//envoie la reqête dans la BDD
              header('Location:index.php');
        }
        //----------------connection refuser---------------------------
        else {
            echo "refuser";// si les identifiant fournie sont faux on lui indique que c'est refuser
        }
    } else {
        
    }
    include_once 'include/header.inc.php';
    $smarty->display('template/connect.tpl'); //appele la page template

    include_once 'include/principale.inc.php';
    include_once 'include/footer.inc.php';
}
?>




