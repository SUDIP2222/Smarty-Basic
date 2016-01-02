<?php /* Smarty version 3.1.27, created on 2015-12-05 10:53:55
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\21\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:194455662b4335892a8_58857308%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3b6c04dcc33322fdce80e9ebdfb6eaa4772527b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\21\\index.tpl',
      1 => 1449309229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194455662b4335892a8_58857308',
  'variables' => 
  array (
    'articleTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5662b433619b44_09786039',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5662b433619b44_09786039')) {
function content_5662b433619b44_09786039 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '194455662b4335892a8_58857308';
echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['articleTitle']->value, 'UTF-8');

}
}
?>