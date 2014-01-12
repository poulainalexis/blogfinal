<?php
 $valid_log=false;
$db=mysql_connect("localhost","root","") or die("imposible de se connecter: ".mysql_error());
mysql_select_db("blog");

if (isset ($_COOKIE['sid']))
{
    
    $connect= $_COOKIE['sid'];
    $sql = "SELECT COUNT(*) as total FROM connexion WHERE sid='$connect'";// requete a verifier
    $req=  mysql_query($sql);
    $data=  mysql_fetch_array($req);
    print_r($data['total']);
  
    if($data['total']>0)
    {
        
        echo"connecter";
         $valid_log=true;
    }else
    {
        
     
    }
    
    
}
else
{
  
    echo"vous etes pas connecter";
    
}
?>
