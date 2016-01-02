<?php


    require '../libs/Smarty.class.php';

    $smarty=new Smarty();

    $smarty->assign('articleTitle', "Grandmother of\neight makes\t hole in one.");

    $smarty->display('19/index.tpl');


?>