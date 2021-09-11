<?php
$listMahasiswaJSON = '[
    { "nama": "suci apriani"},
    { "nama": "renza ilhami riski"},
    { "nama": "tauafan aji"},
    { "nama": "rahmad dwi oktanto"}
]';
$listMahasiswa = json_decode($listMahasiswaJSON);

foreach($listMahasiswa as $key => $mahasiswa) {
    echo "{$key}. nama: {$mahasiswa->nama} <br>";
}