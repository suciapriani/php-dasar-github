<?php
//paramenter dengan nilai default 
function perkenalan($nama, $salam="assalamualaikum"){
  echo $salam.",<br>";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}
//MEmangggil fungsi yang sudah dibuat
perkenalan("suci apriani", "hallo");

  echo "<hr>";

  $saya = "Indry";
  $ucapanSalam = "Selamat pagi";
  // memanggilnya lagi
  perkenalan($saya);
?>