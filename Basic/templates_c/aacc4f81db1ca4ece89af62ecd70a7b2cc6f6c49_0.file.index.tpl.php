<?php /* Smarty version 3.1.27, created on 2015-12-04 22:25:30
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\12\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30204566204cab82be9_28659748%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aacc4f81db1ca4ece89af62ecd70a7b2cc6f6c49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\12\\index.tpl',
      1 => 1449264316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30204566204cab82be9_28659748',
  'variables' => 
  array (
    'articleTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566204cac8c629_12726154',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566204cac8c629_12726154')) {
function content_566204cac8c629_12726154 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30204566204cab82be9_28659748';
echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

<?php echo preg_replace('!^!m',str_repeat(' ',4),$_smarty_tpl->tpl_vars['articleTitle']->value);?>

<?php echo preg_replace('!^!m',str_repeat(' ',10),$_smarty_tpl->tpl_vars['articleTitle']->value);?>

<?php echo preg_replace('!^!m',str_repeat("\t",1),$_smarty_tpl->tpl_vars['articleTitle']->value);

}
}
?>