<?php
    // $hari = 1;

    // switch ($hari){
    //     case 1:
    //         echo 'minggu';
    //         break;
    //     case 2 :
    //         echo 'senin';
    //         break;
    //     case 3:
    //         echo 'selasa';
    //         break;
    //     default:
    //         echo 'hari belum ada';
    //         break;
    // }

    $pilihan = 'tambah';

    switch ($pilihan){
        case 'tambah':
            echo 'anda memilih tambah';
            break;
        case 'ubah':
            echo 'anda memilih ubah';
            break;
        case 'hapus':
            echo 'anda memilih hapus';
            break;
        default :
            echo 'pilihan tidak valid';
            break;
    }
?>