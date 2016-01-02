<?php

    require '../libs/Smarty.class.php';

    $smarty = new Smarty;
    $smarty->assign('firstname', 'Doug');
    $smarty->assign('lastname', 'Evans');
    $smarty->assign('meetingPlace', 'New York');
    $smarty->display('2/index.tpl');

?>