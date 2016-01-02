<?php /* Smarty version 3.1.27, created on 2015-12-04 20:28:58
         compiled from "C:\xampp\htdocs\smarty\Basic\templates\5\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:218905661e97a404fb9_63936417%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cda81cb77745ae9ea9e569bed3c9c4677063272' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Basic\\templates\\5\\index.tpl',
      1 => 1449256728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218905661e97a404fb9_63936417',
  'variables' => 
  array (
    'SCRIPT_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5661e97a447641_94354654',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661e97a447641_94354654')) {
function content_5661e97a447641_94354654 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '218905661e97a404fb9_63936417';
?>

    
    <?php echo $_POST['page'];?>

    
    <?php echo $_COOKIE['username'];?>

    
    <?php echo $_SERVER['SERVER_NAME'];?>

    
    <?php echo $_ENV['PATH'];?>

    
    <?php echo $_SESSION['id'];?>

    
    <?php echo $_REQUEST['username'];?>


    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?page=smarty">click me</a>
    <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=smarty">click me</a>

    <div id="footer">Powered by Smarty <?php echo '3.1.27';?>
</div>

<?php }
}
?>