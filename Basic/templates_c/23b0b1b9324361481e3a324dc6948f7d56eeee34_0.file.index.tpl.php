<?php /* Smarty version 3.1.27, created on 2015-12-05 10:25:25
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\16\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:227845662ad852b3513_77845370%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23b0b1b9324361481e3a324dc6948f7d56eeee34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\16\\index.tpl',
      1 => 1449307521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227845662ad852b3513_77845370',
  'variables' => 
  array (
    'articleTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5662ad85301722_73204782',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5662ad85301722_73204782')) {
function content_5662ad85301722_73204782 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '227845662ad852b3513_77845370';
echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['articleTitle']->value,'Garden','Vineyard');?>

<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['articleTitle']->value,' ','  ');

}
}
?>