<?php /* Smarty version Smarty-3.1.15, created on 2013-11-26 15:37:58
         compiled from "template\formul.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195625294addb549141-96675559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a35e050436c1921b32ddb827c1aff8f05ce596e9' => 
    array (
      0 => 'template\\formul.tpl',
      1 => 1385480272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195625294addb549141-96675559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5294addb5a4082_95739834',
  'variables' => 
  array (
    'data' => 0,
    'action_label' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5294addb5a4082_95739834')) {function content_5294addb5a4082_95739834($_smarty_tpl) {?> <div class="span8">
            <!-- notifications -->

            <!-- contenu -->
           <h2>Ajouter un article</h2>;
            <div class=" btn btn-large btn-primary ">
                <form action="formulaire.php" method="post" enctype= "multipart/form-data" id=form_article">
                    
<input type="hidden" name="IDvaleur" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['IDarticle'];?>
">

                    <TABLE BORDER=0>
                        <TD>Titre</TD>
                        <TR>

                            <TD>
                                <INPUT type=text name="leTitre" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['Titre'];?>
">
                            </TD>
                        </TR>
                        <TD>Texte</TD>
                        <TR>

                            <TD>
                                <TEXTAREA rows="5" name="commentaires" >
                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['Texte'];?>
</TEXTAREA>
                                            
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
                         
                               
                            <input type="submit"  name="<?php echo $_smarty_tpl->tpl_vars['action_label']->value;?>
" class=" btn btn-large btn-primary2 "value="<?php echo $_smarty_tpl->tpl_vars['action_label']->value;?>
"  />
                                </TD>
                            </TR>
                            </TABLE>
                                    
                            </FORM>
                            </div>
                            </div>   
                               
                                
<?php }} ?>
