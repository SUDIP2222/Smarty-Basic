<?php /* Smarty version 3.1.27, created on 2015-12-04 18:55:28
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\3\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:156435661d390d064b1_58505297%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d2622f512907a93bdeb5821bf5d66e9c59fee39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\3\\index.tpl',
      1 => 1449251704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156435661d390d064b1_58505297',
  'variables' => 
  array (
    'Contacts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5661d390d352c5_07855445',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661d390d352c5_07855445')) {
function content_5661d390d352c5_07855445 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '156435661d390d064b1_58505297';
echo $_smarty_tpl->tpl_vars['Contacts']->value['fax'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['email'];?>
<br />

<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['home'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['cell'];?>
<br /><?php }
}
?>