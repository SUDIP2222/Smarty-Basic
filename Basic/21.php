<?php


require '../libs/Smarty.class.php';

$smarty=new Smarty();

$smarty->assign('articleTitle', "If Strike isn't Settled Quickly it may Last a While.");

$smarty->display('21/index.tpl');


?>