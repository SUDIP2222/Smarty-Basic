<?php /* Smarty version 3.1.27, created on 2015-12-05 10:43:56
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\20\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13245662b1dc605274_11045655%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da43ef9346a5bc32389b7418d7989661fabe5a37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\20\\index.tpl',
      1 => 1449308629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13245662b1dc605274_11045655',
  'variables' => 
  array (
    'articleTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5662b1dc686117_41510784',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5662b1dc686117_41510784')) {
function content_5662b1dc686117_41510784 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '13245662b1dc605274_11045655';
echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value);?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30);?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,'');?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,"---");?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,'',true);?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,"...",true);?>

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,'..',true,true);

}
}
?>