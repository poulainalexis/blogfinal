

<div class="span8">
     {foreach from=$Com item=lecom}   
   {$lecom['pseudo']}
   <p style="text-align:justify;"> 
   {$lecom['Texte']}
   <p>
   {/foreach}
          <div class=" btn btn-large btn-primary ">
                <form action="commentaire.php" method="post" enctype= "multipart/form-data" id=form_article>


 <TABLE BORDER=0>
                        <TD>pseudo</TD>
                        <TR>

                            <TD>
                                <input type="text" name="pseudo" value="" />
                            </TD>
                        </TR>
                        
                          <TD>email</TD>
                        <TR>

                            <TD>
                                <input type="text" name="Email" value="" />
                            </TD>
                        </TR>
                        <TD>Texte</TD>
                        <TR>

                            <TD>
                                <TEXTAREA  rows="5" name="commentaires" >
                                   </TEXTAREA>
                                  </TD>           
                            </TR>
                            <right>                         
                            <TR> 
                                <TD>
                         
                               
                       <input type="submit"  name="ajouter" class=" btn btn-large btn-primary2 "value="ajouter votre commentaire"  />
                                </TD>
                           </TR>
                             </TABLE>
</FORM>
           
</div>

     </div>


