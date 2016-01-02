<?php

    require '../libs/Smarty.class.php';

    $smarty=new Smarty();
    $smarty->assign('articleTitle', 'Dealers Will Hear Car Talk at Noon.');
    $smarty->assign('email', '');

    $smarty->display('10/index.tpl');

?>