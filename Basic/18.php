<?php

    require '../libs/Smarty.class.php';

    $smarty=new Smarty();

    $smarty->assign('number', 23.5787446);

    $smarty->display('18/index.tpl');

?>