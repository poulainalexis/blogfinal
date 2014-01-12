  {foreach from=$ligne item=donnee}
   {*{foreach from=$nombre item=nombrecom}  *}
  {foreach from=$IdOK item=IDconnect}   
   <h2>{$donnee['Titre']}</h2>
   <p style="text-align:justify;"> 
   {$donnee['Texte']}
   
     
  {if $IDconnect == true}
     <br/><a href=formulaire.php?ID={$donnee['IDarticle']}>modifier article </a>
   <a href=Supprimer.php?ID="{$donnee['IDarticle']}">  suprimer article </a>
   {/if}
<a href=commentaire.php?ID={$donnee['IDarticle']}> commentaire </a> <p> {*{$nombrecom}*}
  {/foreach}
    {/foreach}
      
           
  

    
