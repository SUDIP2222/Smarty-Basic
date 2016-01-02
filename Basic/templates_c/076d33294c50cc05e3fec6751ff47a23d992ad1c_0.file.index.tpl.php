<?php /* Smarty version 3.1.27, created on 2015-12-04 20:59:03
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\8\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:237605661f087d60961_07275374%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '076d33294c50cc05e3fec6751ff47a23d992ad1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\8\\index.tpl',
      1 => 1449259138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237605661f087d60961_07275374',
  'variables' => 
  array (
    'articleTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5661f087e2fa14_94096428',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661f087e2fa14_94096428')) {
function content_5661f087e2fa14_94096428 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '237605661f087d60961_07275374';
echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['articleTitle']->value, $tmp);?>

<?php echo mb_strlen($_smarty_tpl->tpl_vars['articleTitle']->value, 'UTF-8');

}
}
?>