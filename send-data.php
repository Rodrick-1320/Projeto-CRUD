<?php 

    include_once 'conection.php';

    $data = [];
    foreach (['prdt', 'val', 'qt1', 'qt2'] as $value) {
        $data[$value] = $_POST[$value];
    }

    // valor total
    $data['vt'] = (($data['qt1'] + $data['qt2']) * $data['val']);

    $rint = (($data['qt2'] * 100) / $data['qt1']);

    if ($rint >= 100) {
        $data['ri'] = ($rint - 100);
        //$r =  " + " + ($rin - 100) + " % ";
    } else {
        $data['ri'] = ($rint - 100);
    }

    $DB = new ConnectDB("localhost", "root", "", "loja");
    // $DB->set_sql();
    $DB->prepare_sql("INSERT INTO produtos (id, nome, val, qt1, qt2, vt, ri) VALUES ('',[prdt], [val], [qt1], [qt2], [vt], [ri])", $data);
    $DB->exec_sql();

    

