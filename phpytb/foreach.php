<?php
    // $nama = array('budi', 'jono', 'joni', 7);

    // var_dump($nama);

    // echo '<br>';

    // foreach($nama as $key){
    //     echo $key;
    // }

    $nama=array (
        'budi'=>'malang',
        'joni'=>'jember',
        'koko'=>'gresik'
    );

    var_dump($nama);
    echo '<br>';
    foreach($nama as $key => $value){
        echo $key. '_'. $value;
        echo '<br>';
    }
?>