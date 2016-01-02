<?php /* Smarty version 3.1.27, created on 2015-12-04 20:28:23
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\6\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:145415661e957c13972_48379557%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f20e36b33731c1443783c6f9a8fd2bbf3ec7103' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\6\\index.tpl',
      1 => 1449257186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145415661e957c13972_48379557',
  'variables' => 
  array (
    'articleTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5661e957cdad23_25722410',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661e957cdad23_25722410')) {
function content_5661e957cdad23_25722410 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '145415661e957c13972_48379557';
echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value);?>

<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value,true);

}
}
?>