<!DOCTYPE html>
<html>
    <head>
        <title>Form Sederhana</title>
    </head>
    <body>
    <center><h2>Registrasi Siswa Baru</h2></center>
    <form method = 'POST' action = 'hsl4.php'>
   <center> 
<table border = '1' cellspacing = '1' cellpadding = '10'
style = 'border'>
<tr>
<td> Nama Siswa </td>
<td width = '5' align = 'center'> : </td>
<td> <input type = 'text' placeholder='Nama Siswa' name = 'nama' /> </td>
</tr>
<tr>
<td> Jenis Kelamin </td>
<td align = 'center'> : </td>
<td> <input type = 'text' placeholder='jenis kelamin' name = 'jenis_kelamin' /> </td>
</tr>
<tr>
<td> Kelas </td>
<td align = 'center'> : </td>
<td> <input type = 'text' placeholder='kelas' name = 'kelas' /> </td>
</tr>
<tr>
<td> Alamat </td>
<td width = '5' align = 'center'> : </td>
<td> <textarea name = 'alamat' placeholder='alamat' ></textarea> </td>
</tr>
<tr>
<td colspan = '3' align = 'center'>
<input type = 'submit' name = 'submit' value = 'Submit'/>
<input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
</tr>
</table>
</center>

<center><a href = 'lthn5.php'> Kembali </a></center>
</form>
</body>
</head>
</html>