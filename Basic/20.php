<?php


require '../libs/Smarty.class.php';

$smarty=new Smarty();

$smarty->assign('articleTitle', 'Two Sisters Reunite after Eighteen Years at Checkout');

$smarty->display('20/index.tpl');


?>