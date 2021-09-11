<!DOCTYPE html>
<html>
    <head>
        <title>menghitung</title>
    </head>
    <body>
    <fieldset>
    <legend>BANGUN RUANG LINGKARAN</legend>
<form method = "POST" action = "">
<table>
    <tr>
         <td>MASUKAN BILANGAN</td>
          <td>:</td>
          <td><input type="number" name="jari"></td> 
      <td><input type = "submit" name = "submit">
      </td>
      </table>
</form>
</fieldset>
<?php
      if (isset($_POST['submit'])) {
      function luas($jari, $phi=3.14){
          $jari **= 2;
          $luas = $jari * $phi;
          return $luas;
      }
      function keliling($jari, $phi=3.14){
        $keliling = ($jari * $phi) * 2;
        return $keliling;
      }
          echo "jari - jari = " . $_POST['jari'];
          echo "<br>";
          echo "luas lingkaran = " . luas($_POST['jari']);
          echo "<br>";
          echo "keliling lingkaran = " . keliling($_POST['jari']);;
      }

      ?>
    </body>
</html>
