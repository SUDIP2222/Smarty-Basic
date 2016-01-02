<?php /* Smarty version 3.1.27, created on 2015-12-04 18:51:24
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\2\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28585661d29c51b014_38063918%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4566eb2cdf8f5d79925aecd2fb3f65451993b49e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\2\\index.tpl',
      1 => 1449251478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28585661d29c51b014_38063918',
  'variables' => 
  array (
    'firstname' => 0,
    'lastname' => 0,
    'meetingPlace' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5661d29c549e26_72486955',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661d29c549e26_72486955')) {
function content_5661d29c549e26_72486955 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28585661d29c51b014_38063918';
?>


    Hello <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
, glad to see you can make it.
    <br />
    
    
    
    This weeks meeting is in <?php echo $_smarty_tpl->tpl_vars['meetingPlace']->value;?>
.<?php }
}
?>