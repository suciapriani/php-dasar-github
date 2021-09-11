<!DOCTYPE html>
<html>
    <head>
        <title>input</title>
    </head>
<body>
<fieldset>
    <legend>data formulir</legend>
       <form method = "POST" action = "">
          <table> 
            <tr>
            <td>Nama</td>
            <td>:</td>
                <td><input type = 'text' name = 'nama'></td>
            </tr>     
            <tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td><input type = 'radio' name = 'jenis' value = "perempuan"> perempuan
                    <input type = 'radio' name = 'jenis' value = "laki-laki"> laki-laki</td>
            </tr>   
            <tr>
                <td>tanggal lahir</td>
                <td>:</td>
                <td><input type="date" name= 'tgl_lahir' required></td>
            </tr>
            <tr>
                <td>agama</td>
                <td>:</td>
                <td><select name = "agama">
                    <option value= "islam">islam</option>
                    <option value= "katolik">katolik</option>
                    <option value= "kristen">kristen</option>
                    <option value= "budha">budha</option>
                    <option value= "hindu">hindu</option></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td><textarea cols="50" rows="6" name='alamat'>
                </textarea>
                </td>
            </tr>
            <tr>
                <td>hobi</td>
                <td>:</td>
                <td><input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
                    <input type="checkbox" name="hobi[]" value="Sepak Bola"> Sepak Bola<br>
                    <input type="checkbox" name="hobi[]" value="Programming"> Programming<br>
                    <input type="checkbox" name="hobi[]" value="bermain"> bermain<br>
            </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" name = 'simpan' >
            </td>
</tr>
         </table> 
    </form>
</fieldset>
</body>
</html>

<?php
 if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
 }
    
        function biodata($nama, $jenis, $tgl_lahir, $agama, $alamat, $hobi){
           echo "<tr>";
           echo "<td>";
           echo "<b>";
           echo " Nama :  ".$nama. "<br>";
           echo "jenis kelamin : ".$jenis. "<br>";
           echo "tanggal lahir : ".$tgl_lahir. "<br>";
           echo "agama : ".$agama. "<br>";
           echo "alamat : ".$alamat. "<br>";
           echo "hobi: ";
           foreach($hobi as $hb){
               echo "<li>".$hb ."</li>";
           }
           echo "</b>";
           echo "</td>";
           echo "</tr>";
 }
 echo biodata($_POST['nama'],$_POST['jenis'],$_POST['tgl_lahir'],$_POST['agama'],$_POST['alamat'],$hobi);
?>