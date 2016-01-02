<?php

    require '../libs/Smarty.class.php';

    $smarty=new Smarty();

    $smarty->assign('articleTitle', 'Something Went Wrong in Jet Crash, Experts Say.');

    $smarty->display('17/index.tpl');

?>