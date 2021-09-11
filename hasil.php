<!DOCTYPE html>
<html>
<head>
<title>Cetak Nilai</title>
<style type = "text/css">
    body{
        background-color: #00ffff;
    }
    </style>
</head>
<?php
if(isset($_POST['cetak'])){
    $nama = $_POST ['nama'];
    $nis = $_POST ['nis'];
    $nilai1 = $_POST ['nilai1'];
    $nilai2 = $_POST ['nilai2'];
    $nilai3 = $_POST ['nilai3'];
    $nilai4 = $_POST ['nilai4'];
    $nilai5 = $_POST ['nilai5'];
    $nilai6 = $_POST ['nilai6'];
    $nilai7 = $_POST ['nilai7'];
    $nilai8 = $_POST ['nilai8'];
    $nilai9 = $_POST ['nilai9'];
    $nilai10 = $_POST ['nilai10'];

    $nilai = [
        'Pendidikan Agama Islam' => $nilai1,
        'PPKN' => $nilai2,
        'Bahasa Indonesia' => $nilai3,
        'Matematika' => $nilai4,
        'Bahasa Inggris' => $nilai5,
        'Produk Kreatif dan Kewirausahaan' => $nilai6,
        'Al - Quran' => $nilai7,
        'Bimbingan Konseling' => $nilai8,
        'Produktif RPL' => $nilai9,
        'Prpduktif TKJ' => $nilai10,
    ];

    echo " <center><h2>SMK ASSALAAM BANDUNG<br> Tahun 2021-2022</h2><br>
    <table border = 1 frame = 'void' width = 400><tr><td>
    <br>
    <table>
    <tr bgcolor='#EE6868'>
    <td>Nama</td>
    <td>   : $nama</td>
    </tr>
    <tr bgcolor='#EE6868' >
    <td>Nis</td>
    <td>   : $nis</td>
    </tr>
    </table>
    <br>
    <table border = 1 width = 100%>
    <tr bgcolor='yellow'>
    <td align = center>No</td>
    <td align = center width = 100%>Mata Pelajaran</td>
    <td align = center>Grade</td>
    </tr>
    ";

    $i = 1;
    $total = 0;
    $grade = " ";
    foreach ($nilai as $key => $value) {
        if ($value > 85 && $value <= 100) {
            $grade = "A";
            $total = $total + 4;
        }elseif ($value > 70 && $value <= 85) {
            $grade = "B";
            $total = $total + 3;
        }elseif ($value > 60 && $value <= 70) {
            $grade = "C";
            $total = $total + 2;
        }elseif ($value > 40 && $value <= 60) {
            $grade = "D";
            $total = $total + 1;
        }elseif ($value > 0 && $value <= 40) {
            $grade = "E";
            $total = $total + 0;
        }
        echo " 
<tr bgcolor='#EE6868' >
        
        <td align = center>$i</td>
        <td>$key</td>
        <td align = center>$grade</td>
        </tr>";
        $i++;
    }
    echo "
    </table><br>
    <center><b>Nilai Rata - Rata Anda Adalah : ".($total/10)."
    </td></tr></table>";
    
}
?>