<?php
function grade($total_akhir){
    if ($total_akhir >= 88){
        return 'A';
    } elseif ($total_akhir >= 70 ){
        return 'B';
    } elseif ($total_akhir >= 56){
        return 'C';
    } elseif ($total_akhir >= 36){
        return 'D';
    } elseif ($total_akhir >= 0){
        return 'E';
    } else {
        return 'I';
    }

}
function kelulusan($total_akhir) {
     if ($total_akhir > 55 ){
     return 'LULUS';
     } else {
     return 'TIDAK LULUS';
     }
 }

function predikat($grade){
    switch ($grade) {
        case 'A' : return 'Sangat Memuaskan';
        break;
        case 'B' : return 'Memuaskan';
        break;
        case 'C' : return 'Cukup';
        break;
        case 'D' : return 'Kurang';
        break;
        case 'E' : return 'Sangat Kurang';
        break;
    }
}
  ?>