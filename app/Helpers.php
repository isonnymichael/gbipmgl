<?php

function tanggal_indo($tanggal, $withTime = false)
{
	$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);
			
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
    $split 	  = explode('-', $tanggal);
    
    $tgl_indo =  $bulan[ (int)$split[1] ] . ' ' . $split[0];
    $time = '';
	if($withTime){
        $time = ' at '.substr($tanggal,11,5);
    }
    $num = date('N', strtotime($tanggal));
    return $hari[$num] . ', ' . $tgl_indo.$time;
}