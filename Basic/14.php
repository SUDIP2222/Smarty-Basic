<?php

    require '../libs/Smarty.class.php';

    $smarty=new Smarty();
    $smarty->assign('articleTitle', "Sun or rain expected\ntoday, dark tonight");

    $smarty->display('14/index.tpl');

?>