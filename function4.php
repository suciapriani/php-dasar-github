<?php
//fungsi yang mengembalikan nilai
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "umur saya adalah ". hitungUmur(2004, 2021) ." tahun";
?>