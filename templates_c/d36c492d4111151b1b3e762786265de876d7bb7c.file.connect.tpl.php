<?php /* Smarty version Smarty-3.1.15, created on 2013-11-26 13:53:49
         compiled from "template\connect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43645294a4ca569e97-80443971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd36c492d4111151b1b3e762786265de876d7bb7c' => 
    array (
      0 => 'template\\connect.tpl',
      1 => 1385474023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43645294a4ca569e97-80443971',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5294a4ca5b44a0_59149794',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5294a4ca5b44a0_59149794')) {function content_5294a4ca5b44a0_59149794($_smarty_tpl) {?><div class= "span8">
<form action="ConnectionID.php" method="post" enctype= "multipart/form-data" id=form_article">
<br>
<label for="email"> email </label>
<input type = "text" name = "email" value = "" />
<br>
<label for="mdp"> mot de passe </label>
<input type="password" name="mdp" value="" />
        
         <input type="submit" name="CONNECTION" value="connexion" />
 
        </form>

</div><?php }} ?>
