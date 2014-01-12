<?php /* Smarty version Smarty-3.1.15, created on 2014-01-11 22:17:43
         compiled from "template\Commentaire.tpl" */ ?>
<?php /*%%SmartyHeaderCode:626152c6ebe150e348-11052649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86373e550fa46e70c7767a6a40d25f6c98517e3e' => 
    array (
      0 => 'template\\Commentaire.tpl',
      1 => 1389477987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '626152c6ebe150e348-11052649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52c6ebe1757086_90467095',
  'variables' => 
  array (
    'Com' => 0,
    'lecom' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c6ebe1757086_90467095')) {function content_52c6ebe1757086_90467095($_smarty_tpl) {?>

<div class="span8">
     <?php  $_smarty_tpl->tpl_vars['lecom'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lecom']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Com']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lecom']->key => $_smarty_tpl->tpl_vars['lecom']->value) {
$_smarty_tpl->tpl_vars['lecom']->_loop = true;
?>   
   <?php echo $_smarty_tpl->tpl_vars['lecom']->value['pseudo'];?>

   <p style="text-align:justify;"> 
   <?php echo $_smarty_tpl->tpl_vars['lecom']->value['Texte'];?>

   <p>
   <?php } ?>
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


<?php }} ?>
