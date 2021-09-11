<?php
//fungsi yang mengembalikan nilai
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="asalamualikum"){
    echo $salam.", <br>";
    echo "perkenalkan, nama saya ".$nama."<br>";
    //memanngil fungsi lain
    echo "saya berusia ". hitungUmur(2004, 2021) ." tahun</br>";
    echo "senang berkenalan dengan anda <br>";
}
//memanggil fungsi perkenalan
perkenalan("ardianta");

?>