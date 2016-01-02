<?php


    require '../libs/Smarty.class.php';

    $smarty = new Smarty;
    $smarty->left_delimiter = '<!--{';
    $smarty->right_delimiter = '}-->';

    $smarty->assign('foo', 'bar');
    $smarty->assign('name', 'Albert');
    $smarty->display('1/index.tpl');


?>