<?php /* Smarty version 3.1.27, created on 2015-12-05 09:56:11
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\13\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:224205662a6abafb457_00729975%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88825b393f151e2633cdfa09ed8732f9aece0f9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\13\\index.tpl',
      1 => 1449305686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224205662a6abafb457_00729975',
  'variables' => 
  array (
    'articleTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5662a6abcbc834_54444677',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5662a6abcbc834_54444677')) {
function content_5662a6abcbc834_54444677 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '224205662a6abafb457_00729975';
echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

<?php echo mb_strtolower($_smarty_tpl->tpl_vars['articleTitle']->value, 'UTF-8');

}
}
?>