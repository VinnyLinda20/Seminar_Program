<?php
    $tanggal = $_GET['tgl'];
    $tanggal_akhir = date('Y-m-d',strtotime($tanggal.'+5 day'));
    header('Content-Type: application/json; charset=uf-8');
    echo json_encode($tanggal_akhir);
    ?>