<?php

    require '../libs/Smarty.class.php';

    $smarty = new Smarty;
    $smarty->assign('articleTitle', 'next x-men film, x3, delayed.');

    $smarty->display('6/index.tpl');

?>