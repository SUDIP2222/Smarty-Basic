<?php /* Smarty version 3.1.27, created on 2015-12-05 10:09:27
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\15\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26105662a9c710e380_18250450%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c52721ad90d23eaf096fb822bc3d4feef44bdd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\15\\index.tpl',
      1 => 1449306558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26105662a9c710e380_18250450',
  'variables' => 
  array (
    'articleTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5662a9c71ece32_31689154',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5662a9c71ece32_31689154')) {
function content_5662a9c71ece32_31689154 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_regex_replace')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.regex_replace.php';

$_smarty_tpl->properties['nocache_hash'] = '26105662a9c710e380_18250450';
?>

    

    <?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

    <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['articleTitle']->value,"/[\r\t\n]/"," ");

}
}
?>