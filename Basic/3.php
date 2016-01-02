<?php


    require '../libs/Smarty.class.php';

    $smarty = new Smarty;


    $smarty->assign('Contacts',
        array('fax' => '555-222-9876',
            'email' => 'zaphod@slartibartfast.example.com',
            'phone' => array('home' => '555-444-3333',
                'cell' => '555-111-1234')
        )
    );

    $smarty->display('3/index.tpl');