<?php
    //function luas segitiga
    function segitiga($alas,$tinggi){
        $Lsegitiga = ($alas*$tinggi*0.5);
        return $Lsegitiga;
    }

    //funtion luas persegi panjang
    function persegi($panjang,$lebar){
        $luas = $panjang*$lebar;
        return $luas;
    }

    //function volume kubus
    function volumeKubus($sisi){
        $volume = $sisi**3;
        return $volume;
    }

    //function volume balok
    function volumeBalok($panjang,$lebar,$tinggi){
        $volume = $panjang*$lebar*$tinggi;
        return $volume;
    }



?>