<?php
//latihan
echo "1.contoh program array numeric<br>";
$jurusan= ["jurusan teknik informatika",
          "jurusan sistem informatika",
          "jurusan teknik komputer",
          "jurusan manajemen informatika"
        ];
        foreach ($jurusan as $kejurusan => $jurus){
            echo $jurus .'-ada di index'.' '.$kejurusan;
            echo '<br>';
            }      
echo "<br>";
echo "2.contoh program array assosiatif<br>";

$jurusan= ['jurusan 1' => 'teknik informatika',
           'jurusan 2' => 'sistem informatika',
           'jurusan 3' => 'teknik komputer',
           'jurusan 4' => 'manajemen informatika'
        ];
        foreach ($jurusan as $key => $jurus){
        echo 'kata kunci index = ' . $key;
        echo ' nilai = ' . $jurus;
        echo '<br>';
            }      
?>