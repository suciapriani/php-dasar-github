<?php
echo "<center><h2> Kampus Sekolah Tinggi Teknologi Bandung</h2></center>";
$mahasiswa1 = '{
    "1":{"Nim": 11223344,
        "Nama": "Sifa Afna",
        "Umur": "17 Tahun",
        "Email": "Sifa@gmail.com"},
    "2":{"Nim": 22334455,
        "Nama": "Syifa Khumaira",
        "Umur": "17 Tahun",
        "Email": "Sifakhumairo@gmail.com"},
    "3":{"Nim": 33445566,
        "Nama": "Selvi Puspita",
        "Umur": "17 Tahun",
        "Email": "selvipuspita@gmail.com"},
    "4":{"Nim": 44556677,
        "Nama": "Silvi Al Zahro",
        "Umur": "18 tahun",
        "Email": "Silvi@gmail.com"},
    "5":{"Nim": 44556677,
        "Nama": "Suci Apriani",
        "Umur": "17 Tahun",
        "Email": "Suci@gmail.com"}
    }';
$mahasiswa2 = '{
    "1":{"Nim": 11223344,
        "Nama": "Afna",
        "Umur": "17 Tahun",
        "Email": "Sifa@gmail.com"},
    "2":{"Nim": 22334455,
        "Nama": "Khumaira",
        "Umur": "17 Tahun",
        "Email": "Sifakhumairo@gmail.com"},
    "3":{"Nim": 33445566,
        "Nama": "Puspita",
        "Umur": "17 Tahun",
        "Email": "selvipuspita@gmail.com"},
    "4":{"Nim": 44556677,
        "Nama": "Zahro",
        "Umur": "18 tahun",
        "Email": "Silvi@gmail.com"},
    "5":{"Nim": 44556677,
        "Nama": "Apriani",
        "Umur": "17 Tahun",
        "Email": "Suci@gmail.com"}  
}';
$mahasiswa3= '{
    "1":{"Nim": 11223344,
        "Nama": "putri perdana",
        "Umur": "17 Tahun",
        "Email": "putri perdana@gmail.com"},
    "2":{"Nim": 22334455,
        "Nama": "indah rianti",
        "Umur": "17 Tahun",
        "Email": "indah rianti@gmail.com"},
    "3":{"Nim": 33445566,
        "Nama": "astri fitria",
        "Umur": "17 Tahun",
        "Email": "astrifitriani@gmail.com"},
    "4":{"Nim": 44556677,
        "Nama": "cindy nurul",
        "Umur": "18 tahun",
        "Email": "cindinurul@gmail.com"},
    "5":{"Nim": 44556677,
        "Nama": "indri betmen",
        "Umur": "17 Tahun",
        "Email": "indri betmen.com"}
    }';
    $mahasiswa4 = '{
    "1":{"Nim": 11223344,
        "Nama": "tiara",
        "Umur": "17 Tahun",
        "Email": "tiara@gmail.com"},
    "2":{"Nim": 22334455,
        "Nama": "fani nurul",
        "Umur": "17 Tahun",
        "Email": "faninurul@gmail.com"},
    "3":{"Nim": 33445566,
        "Nama": "irfan fadillah",
        "Umur": "17 Tahun",
        "Email": "irfanfadillah@gmail.com"},
    "4":{"Nim": 44556677,
        "Nama": "ruslanramdani",
        "Umur": "18 tahun",
        "Email": "ruslanramdani@gmail.com"},
    "5":{"Nim": 44556677,
        "Nama": "kikipermana",
        "Umur": "17 Tahun",
        "Email": "kikipermana@gmail.com"}
    }';
$listmahasiswa1= json_decode($mahasiswa1);
$listmahasiswa2 = json_decode($mahasiswa2);
$listmahasiswa3 = json_decode($mahasiswa3);
$listmahasiswa4 = json_decode($mahasiswa4);

echo"<br>";
echo"<b>1.dosen : Danny indra gunawan</b> <p>";
foreach ($listmahasiswa1 as $key => $siswa) {
    echo "{$key}. Nim : {$siswa->Nim} <br>";
    echo " Nama : {$siswa->Nama} <br>";
    echo " Umur : {$siswa->Umur} <br>";
    echo " Email : {$siswa->Email} <p>";
}
echo"<br>";
echo"<b>2.dosen : muhammad sabar</b> <p>";
foreach ($listmahasiswa2 as $key => $siswa) {
    echo "{$key}. Nim: {$siswa->Nim} <br>";
    echo "Nama: {$siswa->Nama} <br>";
    echo "Umur: {$siswa->Umur} <br>";
    echo "Email: {$siswa->Email} <p>";
}
echo"<br>";
echo"<b>3.dosen : tersinah sumarni</b> <p>";
foreach ($listmahasiswa3 as $key => $siswa) {
    echo "{$key}. Nim: {$siswa->Nim} <br>";
    echo "Nama: {$siswa->Nama} <br>";
    echo "Umur: {$siswa->Umur} <br>";
    echo "Email: {$siswa->Email} <p>";
}
echo"<br>";
echo"<b>4.dosen : saepudin</b> <p>";
foreach ($listmahasiswa4 as $key => $siswa) {
    echo "{$key}. Nim: {$siswa->Nim} <br>";
    echo "Nama: {$siswa->Nama} <br>";
    echo "Umur: {$siswa->Umur} <br>";
    echo "Email: {$siswa->Email} <p>";
}
?>