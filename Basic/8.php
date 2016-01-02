<?php


    require '../libs/Smarty.class.php';

    $smarty=new Smarty();

    $smarty->assign('articleTitle', 'Cold Wave Linked to Temperatures.');

    $smarty->display('8/index.tpl');

?>