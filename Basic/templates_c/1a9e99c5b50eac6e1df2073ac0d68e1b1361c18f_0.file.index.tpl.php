<?php /* Smarty version 3.1.27, created on 2015-12-05 10:33:19
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\18\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:60145662af5f8a35e3_46112758%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a9e99c5b50eac6e1df2073ac0d68e1b1361c18f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\18\\index.tpl',
      1 => 1449307986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60145662af5f8a35e3_46112758',
  'variables' => 
  array (
    'number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5662af5f8e9af1_06810136',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5662af5f8e9af1_06810136')) {
function content_5662af5f8e9af1_06810136 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '60145662af5f8a35e3_46112758';
?>


    <?php echo $_smarty_tpl->tpl_vars['number']->value;?>

    <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['number']->value);?>

    <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['number']->value);

}
}
?>