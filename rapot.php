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
<body><h2 align="center">FORM CETAK NILAI SISWA<br>SMK ASSALAAM BANDUNG<br>Tahun 2021/2022</h2>
<form method = "POST" action= "hasil.php">
<br></br>
<center>
<table border = "1" width='40'>
        <tr bgcolor='#EE6868' >
                <td>Nama</td>
                <td><input type = 'text' name = 'nama'></td>
            </tr>   
        <tr bgcolor='#EE6868'>
                <td>Nis</td>
                <td><input type = 'text' name = 'nis'></td>
            </tr>      
</table>
<table border="1">
<br>
<tr bgcolor = 'yellow'> 
<td>No</td>
<td colspan="10" align="center">Mata Pelajaran</td>
<td>Nilai</td>
</tr>
<tr bgcolor='#EE6868' >
<td align="center">1</td>
<td colspan="10">Pendidikan Agama Islam</td>
<td><input type='text' name='nilai1'></td>
</tr>
<tr bgcolor='#EE6868' >
<td align="center">2</td>
<td colspan="10">PPKN</td>
<td><input type='text' name='nilai2'></td>
</tr>
<tr bgcolor='#EE6868' >
<td align="center">3</td>
<td colspan="10">Bahasa Indonesia</td>
<td><input type='text' name='nilai3'></td>
</tr>
<tr bgcolor='#EE6868' >
<td align="center">4</td>
<td colspan="10">Matematika</td>
<td><input type='text' name='nilai4'></td>
</tr>
<tr bgcolor='#EE6868' >
<td align="center">5</td>
<td colspan="10">Bahasa Inggris</td>
<td><input type='text' name='nilai5'></td>
</tr>
<tr bgcolor='#EE6868' >
<td align="center">6</td>
<td colspan="10">Produk Kreatif Dan Komunikatif</td>
<td><input type='text' name='nilai6'></td>
</tr>
<tr bgcolor='#EE6868' >
<td align="center">7</td>
<td colspan="10">Al Qur`an</td>
<td><input type='text' name='nilai7'></td>
</tr>
<tr bgcolor='#EE6868' >
<td align="center">8</td>
<td colspan="10">Bimbingan Konseling</td>
<td><input type='text' name='nilai8'></td>
</tr>
<tr bgcolor='#EE6868' >
<td align="center">9</td>
<td colspan="10">Produktif RPL</td>
<td><input type='text' name='nilai9'></td>
</tr>
<tr bgcolor='#EE6868' >
<td align="center">10</td>
<td colspan="10">Produktif TKJ</td>
<td><input type='text' name='nilai10'></td>
</tr>
</table>
<br>
<br >
<input align="center" type="submit" name ="cetak" value='CETAK NILAI'></input>
</center>
</form>
</body>
</html>