<?php /* Smarty version 3.1.27, created on 2015-12-04 18:58:42
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\4\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:283445661d452a821a3_17880735%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d1838a9000c86f4c2260eaf4fe804751fcc7325' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\4\\index.tpl',
      1 => 1449251892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283445661d452a821a3_17880735',
  'variables' => 
  array (
    'Contacts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5661d452ab4e24_37164304',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661d452ab4e24_37164304')) {
function content_5661d452ab4e24_37164304 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '283445661d452a821a3_17880735';
echo $_smarty_tpl->tpl_vars['Contacts']->value[0];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value[1];?>
<br />

<?php echo $_smarty_tpl->tpl_vars['Contacts']->value[2][0];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value[2][1];?>
<br /><?php }
}
?>