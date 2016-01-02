<?php /* Smarty version 3.1.27, created on 2015-12-04 18:45:04
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\1\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:81915661d120625ae4_49391675%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cf26e2619864295ff37d02fe6d9aebd22b80bc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\1\\index.tpl',
      1 => 1449251102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81915661d120625ae4_49391675',
  'variables' => 
  array (
    'name' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5661d120660471_58811024',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661d120660471_58811024')) {
function content_5661d120660471_58811024 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '81915661d120625ae4_49391675';
?>


    Welcome <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 to Smarty
    <?php echo '<script'; ?>
>

            var foo = <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
;
            alert("foo is "+ foo);

    <?php echo '</script'; ?>
><?php }
}
?>