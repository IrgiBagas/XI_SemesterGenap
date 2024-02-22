<?php
    // $nama = array('joni', 'juni', 'jani', 'jono');

    // var_dump($nama);

    // echo '<br>'. '<br>';
    
    // echo $nama[2];

    // echo '<br>'. '<br>';

    // for ($a=0; $a<=5; $a++){
    //     // echo $a;
    //     echo $nama[$a]. '<br>';
    // }

    // foreach ($nama as $b){
    //     echo $b. '<br>';
    // }

    // $nama = array (
    //     'joni' => 'surabaya',
    //     'juni' => 'malang',
    //     'jani' => 'sidoarjo',
    //     'jono' => 'perak'
    // );

    $nama['joni']='surabaya';
    $nama['juni']='malang';
    $nama['jani']='sidoarjo';
    $nama['jono']='perak';
    
    var_dump($nama);

    echo '<br>'. '<br>';

    // echo $nama['juni'];

    foreach($nama as $i => $j){
        echo $i. '=>'. $j;
        
        echo '<br>';
    }
?>