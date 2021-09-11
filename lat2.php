<!DOCTYPE html>
<html" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bio</title>
</head>
<body>
    <fieldset>
        <legend>Biodata diri</legend>
        <form action ="" method="POST">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td> 
                <td><input type="text" name="nama" ></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type = "radio" name = "jk" value = "Laki-Laki">Laki-Laki
                <input type = "radio" name = "jk" value = "Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type = "date" name = "tanggal"></td>
            </tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name = "agama">
                    <option value = "">Pilih Agama</option>
                    <option value = "Islam">Islam</option>
                    <option value = "Budha">Budha</option>
                    <option value = "Hindu">Hindu</option>
                    <option value = "Kristen">Kristen</option>
                    <option value = "Khonghucu">Khonghucu</option>
                </select></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name = "alamat"></textarea></td>
            </tr>
                <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type = "checkbox" name = "hobi[]" value = "Mendengarkan musik">Mendengarkan musik
                <input type = "checkbox" name = "hobi[]" value = "Membaca">Membaca
                <input type = "checkbox" name = "hobi[]" value = "Traveling">Traveling
                <input type = "checkbox" name = "hobi[]" value = "Memasak">Memasak
                <input type = "checkbox" name = "hobi[]" value = "Menulis">Menulis
                <input type = "checkbox" name = "hobi[]" value = "Menggambar">Menggambar
            </td>
            </tr>
                <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" value = "Simpan" name = "simpan">
                <input type='submit' name="Batal" value='Batal'></td></td>
            </tr>
            </table>
        </form>
</fieldset>
    </body>
</html>

<?php
if (isset($_POST['simpan'])){
    $nama=$_POST['nama'];
    $jk=$_POST['jk'];
    $tgl=$_POST['tanggal'];
    $agama=$_POST['agama'];
    $alamat=$_POST['alamat'];
    $hobi=$_POST['hobi'];

    function biodata($nama,$jk,$tgl,$agama,$alamat,$hobi){
        echo "<td>Nama Lengkap</td> <td>:</td>" . "<td>$nama</td>" . "</tr>" . "<br>";
        echo "<td>Jenis Kelamin</td> <td>:</td>" . "<td>$jk</td>" . "</tr>" . "<br>" ;
        echo "<td>Tanggal Lahir</td> <td>:</td>" . "<td>$tgl</td>" . "</tr>" . "<br>";
        echo "<td>Agama</td> <td>:</td>" . "<td>$agama</td>" . "</tr>" . "<br>";
        echo "<td>Alamat</td> <td>:</td>" . "<td>$alamat</td>" . "</tr>" . "<br>";
        echo "Hobi: ";
        foreach($hobi as $hb){
            echo "<li>".$hb ."</li>";
        }
    }
    echo biodata($_POST['nama'],$_POST['jk'],$_POST['tanggal'],$_POST['agama'],$_POST['alamat'],$hobi);
}

?>