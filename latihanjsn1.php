<?php
echo "<center><h2> Kampus Sekolah Tinggi Teknologi Bandung</h2></center>";
$mahasiswapem = '{
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
$listmahasiswa = json_decode($mahasiswapem);
echo"<br>";
echo"<b>1.dosen : Danny indra gunawan</b> <p>";
foreach ($listmahasiswa as $key => $siswa) {
    echo "{$key}. Nim : {$siswa->Nim} <br>";
    echo " Nama : {$siswa->Nama} <br>";
    echo " Umur : {$siswa->Umur} <br>";
    echo " Email : {$siswa->Email} <p>";
}
echo"<br>";
echo"<b>2.dosen : muhammad sabar</b> <p>";
foreach ($listmahasiswa as $key => $siswa) {
    echo "{$key}. Nim: {$siswa->Nim} <br>";
    echo "Nama: {$siswa->Nama} <br>";
    echo "Umur: {$siswa->Umur} <br>";
    echo "Email: {$siswa->Email} <p>";
}
echo"<br>";
echo"<b>3.dosen : tersinah sumarni</b> <p>";
foreach ($listmahasiswa as $key => $siswa) {
    echo "{$key}. Nim: {$siswa->Nim} <br>";
    echo "Nama: {$siswa->Nama} <br>";
    echo "Umur: {$siswa->Umur} <br>";
    echo "Email: {$siswa->Email} <p>";
}
echo"<br>";
echo"<b>4.dosen : saepudin</b> <p>";
foreach ($listmahasiswa as $key => $siswa) {
    echo "{$key}. Nim: {$siswa->Nim} <br>";
    echo "Nama: {$siswa->Nama} <br>";
    echo "Umur: {$siswa->Umur} <br>";
    echo "Email: {$siswa->Email} <p>";
}
?>