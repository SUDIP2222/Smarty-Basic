<?php

    require '../libs/Smarty.class.php';

    $smarty=new Smarty();
    $smarty->assign('articleTitle',"Infertility unlikely to\nbe passed on, experts say.");

    $smarty->display('15/index.tpl');

?>