<?php

    require '../libs/Smarty.class.php';

    $smarty=new Smarty();
    $smarty->assign('articleTitle',
        'NJ judge to rule on nude beach.
    Sun or rain expected today, dark tonight.
    Statistics show that teen pregnancy drops off significantly after 25.'
    );

    $smarty->display('12/index.tpl');

?>