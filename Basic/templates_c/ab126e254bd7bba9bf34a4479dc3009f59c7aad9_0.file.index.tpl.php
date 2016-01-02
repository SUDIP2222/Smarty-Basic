<?php /* Smarty version 3.1.27, created on 2015-12-04 22:15:45
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\10\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18382566202813e7861_34120917%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab126e254bd7bba9bf34a4479dc3009f59c7aad9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\10\\index.tpl',
      1 => 1449263739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18382566202813e7861_34120917',
  'variables' => 
  array (
    'articleTitle' => 0,
    'myTitle' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566202814d9b98_14915390',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566202814d9b98_14915390')) {
function content_566202814d9b98_14915390 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18382566202813e7861_34120917';
echo (($tmp = @$_smarty_tpl->tpl_vars['articleTitle']->value)===null||$tmp==='' ? 'no title' : $tmp);?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['myTitle']->value)===null||$tmp==='' ? 'no title' : $tmp);?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['email']->value)===null||$tmp==='' ? 'No email address available' : $tmp);

}
}
?>