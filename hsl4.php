<?php
if (isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
}

echo "<center>";
echo "<form method= 'POST' action='regis.php'>";
echo "<table>";
echo "<tr>";
echo "<td><input type='submit' name='tambah' value='tambah siswa'></td>";
echo "</tr>";
        echo "</table>";
        echo "</form>";
        echo "<br>";
        echo "<center>";
        echo "<table border= '1' width='600'>";
        echo "<tr>";
        echo "<th>nama</th>";
        echo "<th>jenis_kelamin</th>";
        echo "<th>kelas</th>";
        echo "<th>alamat</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$nama</td>";
        echo "<td>$jenis_kelamin</td>";
        echo "<td>$kelas</td>";
        echo "<td>$alamat</td>";
        echo "</tr>";
        echo "</table>";
        echo "</center>";
?>