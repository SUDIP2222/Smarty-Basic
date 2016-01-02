<?php


    require '../libs/Smarty.class.php';

    $smarty = new Smarty;

    $smarty->assign('Contacts', array(
        '555-222-9876',
        'zaphod@slartibartfast.example.com',
        array('555-444-3333',
            '555-111-1234')
    ));
    $smarty->display('4/index.tpl');


?>