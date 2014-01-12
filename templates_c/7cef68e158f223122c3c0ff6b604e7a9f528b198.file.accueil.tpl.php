<?php /* Smarty version Smarty-3.1.15, created on 2014-01-12 17:08:46
         compiled from "template\accueil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31797529ddfacc9e2b0-37805139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cef68e158f223122c3c0ff6b604e7a9f528b198' => 
    array (
      0 => 'template\\accueil.tpl',
      1 => 1389546522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31797529ddfacc9e2b0-37805139',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529ddface37fb8_08393283',
  'variables' => 
  array (
    'ligne' => 0,
    'IdOK' => 0,
    'donnee' => 0,
    'IDconnect' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529ddface37fb8_08393283')) {function content_529ddface37fb8_08393283($_smarty_tpl) {?>  <?php  $_smarty_tpl->tpl_vars['donnee'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['donnee']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ligne']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['donnee']->key => $_smarty_tpl->tpl_vars['donnee']->value) {
$_smarty_tpl->tpl_vars['donnee']->_loop = true;
?>
   
  <?php  $_smarty_tpl->tpl_vars['IDconnect'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['IDconnect']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['IdOK']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['IDconnect']->key => $_smarty_tpl->tpl_vars['IDconnect']->value) {
$_smarty_tpl->tpl_vars['IDconnect']->_loop = true;
?>   
   <h2><?php echo $_smarty_tpl->tpl_vars['donnee']->value['Titre'];?>
</h2>
   <p style="text-align:justify;"> 
   <?php echo $_smarty_tpl->tpl_vars['donnee']->value['Texte'];?>

   
     
  <?php if ($_smarty_tpl->tpl_vars['IDconnect']->value==true) {?>
     <br/><a href=formulaire.php?ID=<?php echo $_smarty_tpl->tpl_vars['donnee']->value['IDarticle'];?>
>modifier article </a>
   <a href=Supprimer.php?ID="<?php echo $_smarty_tpl->tpl_vars['donnee']->value['IDarticle'];?>
">  suprimer article </a>
   <?php }?>
<a href=commentaire.php?ID=<?php echo $_smarty_tpl->tpl_vars['donnee']->value['IDarticle'];?>
> commentaire </a> <p> 
  <?php } ?>
    <?php } ?>
      
           
  

    
<?php }} ?>
