<?php
$json = '{
    "nama": "suci apriani",
    "domisili": "bandung",
    "usia": 17,
    "wni": true,
    "hobi": [
        "berenang", "berlari","bertamasya"
        ]
}';
$mahasiswa = json_decode($json);

echo "nama: {$mahasiswa->nama} <br>";
echo "domisili: {$mahasiswa->domisili} <br>";

echo "hobi: " . implode(", ",$mahasiswa->hobi);

