<?php
//fungsi dengan parameter
// mmbuat fungsi
function perkenalan($nama, $salam){
  echo $salam.", <br>";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("suci apriani", "hallo");

  echo "<hr>";

  $saya = "Indry";
  $ucapanSalam = "Selamat pagi";
  // memanggilnya lagi
  perkenalan($saya, $ucapanSalam);
?>
