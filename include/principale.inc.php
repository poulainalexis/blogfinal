
<nav class="span4">
   <div>  
       <h3>Menu</h3>
   

    <ul>
        <form action="index.php" method="get" enctype= "multipart/form-data" id=form_article">
            <input type="text" name="votre_recherche" value="vos recherche" />
            <input type="submit" name="" value="recherche" class=" btn btn-large btn-primary " />
            <li><a href="index.php">Accueil</a></li>
  <?php if( $valid_log == true) { ?>              <li><a href="formulaire.php">Rédiger un article</a></li> <?php } ?>
  <?php if( $valid_log == true) { ?>       <li><a href="admin/index.php">admin</a></li>  <?php } ?>
    <?php if( $valid_log == false) { ?>       <li><a href="connectionID.php">connexion</a></li> <?php } else {?><li><a href="Deconnection.php">deconnection</a></li> <?php } ?>
            
        </FORM> 
    </ul>
    </div>
</nav>


