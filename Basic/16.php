<?php

    require '../libs/Smarty.class.php';

    $smarty=new Smarty();

    $smarty->assign('articleTitle', "Child's Stool Great for Use in Garden.");

    $smarty->display('16/index.tpl');

?>