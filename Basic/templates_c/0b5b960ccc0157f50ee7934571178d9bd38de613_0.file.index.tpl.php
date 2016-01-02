<?php /* Smarty version 3.1.27, created on 2015-12-05 10:38:25
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\19\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:53435662b091380d90_74828361%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b5b960ccc0157f50ee7934571178d9bd38de613' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\19\\index.tpl',
      1 => 1449308298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53435662b091380d90_74828361',
  'variables' => 
  array (
    'articleTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5662b091409931_92936739',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5662b091409931_92936739')) {
function content_5662b091409931_92936739 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '53435662b091380d90_74828361';
?>


    <?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

    <?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['articleTitle']->value);?>

    <?php echo preg_replace('!\s+!u', '&nbsp;',$_smarty_tpl->tpl_vars['articleTitle']->value);

}
}
?>