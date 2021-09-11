<?php
$perusahaan = [
    '0' => 'Suci apriani',
    'umur' => '17 tahun',
    'Alamat' => 'kp cilebak',
    'hobi' => ['menggambar' , 'bermain'],
    'media sosial' => ['instagram' => 'scprniiiii',
    'facebool'=> 'suciap']
];

echo"<pre>";
print_r($perusahaan);

echo"<br>";
echo"pemanggilan array 2 dimensi" . "<br>";
echo $perusahaan['hobi'][1]."<br>";
echo $perusahaan['media sosial']['instagram'];
