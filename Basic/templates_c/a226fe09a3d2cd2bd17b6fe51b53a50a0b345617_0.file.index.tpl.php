<?php /* Smarty version 3.1.27, created on 2015-12-05 10:30:00
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\17\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:54335662ae98bfd4d5_19176415%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a226fe09a3d2cd2bd17b6fe51b53a50a0b345617' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\17\\index.tpl',
      1 => 1449307776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54335662ae98bfd4d5_19176415',
  'variables' => 
  array (
    'articleTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5662ae98c8dd79_28923777',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5662ae98c8dd79_28923777')) {
function content_5662ae98c8dd79_28923777 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_spacify')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.spacify.php';

$_smarty_tpl->properties['nocache_hash'] = '54335662ae98bfd4d5_19176415';
?>


    <?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

    <?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['articleTitle']->value);?>

    <?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['articleTitle']->value,"^^");

}
}
?>