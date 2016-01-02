<?php


    require '../libs/Smarty.class.php';

    $smarty=new Smarty();

    $smarty->assign('articleTitle', 'Two Convicts Evade Noose, Jury Hung.');


    $smarty->display('13/index.tpl');

