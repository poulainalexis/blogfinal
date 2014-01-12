 <div class="span8">
            <!-- notifications -->

            <!-- contenu -->
           <h2>Ajouter un article</h2>;
            <div class=" btn btn-large btn-primary ">
                <form action="formulaire.php" method="post" enctype= "multipart/form-data" id=form_article">
                    
<input type="hidden" name="IDvaleur" value="{$data['IDarticle']}">

                    <TABLE BORDER=0>
                        <TD>Titre</TD>
                        <TR>

                            <TD>
                                <INPUT type=text name="leTitre" value="{$data['Titre']}">
                            </TD>
                        </TR>
                        <TD>Texte</TD>
                        <TR>

                            <TD>
                                <TEXTAREA rows="5" name="commentaires" >
                                    {$data['Texte']}</TEXTAREA>
                                            
                            </TR>
                            <TD>Publié</TD>
                            <TR>
                                <TD>
                                  
                                    <input type="checkbox" name="Valider" value="1" />
                                <TD>
                            </TR>

                            <TR>
                            	<TD COLSPAN=2>
                                      <input type="file" name="image" value="envoyer vos photos" ACCEPT="jpg"/>
                            	</TD>
                            </TR> 

                            <TR>
                                <TD>
                         
                               
                            <input type="submit"  name="{$action_label}" class=" btn btn-large btn-primary2 "value="{$action_label}"  />
                                </TD>
                            </TR>
                            </TABLE>
                                    
                            </FORM>
                            </div>
                            </div>   
                               
                                
