<?php

function tanggal_indonesia($bulan){
       
       switch($bulan){
        case"January":$bulan="Januari";break;
        case"February":$bulan="Februari";break;
        case"March":$bulan="Maret";break;
        case"April":$bulan="April";break;
        case"May":$bulan="Mei";break;
        case"June":$bulan="Juni";break;
        case"July":$bulan="Juli";break;
        case"August":$bulan="Agustus";break;
        case"September":$bulan="September";break;
        case"October":$bulan="Oktober"; break;
        case"November":$bulan="Nopember";break;
        case"December":$bulan="Desember";break;
        
       }
       return $bulan;
}