<?php
    //function php
    function lulus {
        $nilai = 70;
        if($nilai >=75){
            $ket = 'Lulus';
        }else{
            $ket = 'Tidak Lulus';
        }
        return $ket;
    }
    //memanggil function
    echo lulus();

?>