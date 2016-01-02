<?php


     require '../libs/Smarty.class.php';

     $smarty=new Smarty();

     $smarty->assign('articleTitle', "Psychics predict world didn't end");

     $smarty->display('7/index.tpl');