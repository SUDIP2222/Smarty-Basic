<?php /* Smarty version 3.1.27, created on 2015-12-04 21:42:54
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\9\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:53215661face3f05f6_51857202%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2c13d7f20fc171937961d8764d8366950e647fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\9\\index.tpl',
      1 => 1449261713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53215661face3f05f6_51857202',
  'variables' => 
  array (
    'config' => 0,
    'yesterday' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5661face4fdeb2_88214568',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661face4fdeb2_88214568')) {
function content_5661face4fdeb2_88214568 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '53215661face3f05f6_51857202';
echo smarty_modifier_date_format(time());?>

<?php echo smarty_modifier_date_format(time(),"%D");?>

<?php echo smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['config']->value['date']);?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value);?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,"%A, %B %e, %Y");?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,$_smarty_tpl->tpl_vars['config']->value['time']);

}
}
?>