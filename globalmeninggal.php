<?php

    $url = "https://api.kawalcorona.com/meninggal/";
    // persiapkan curl / init curl
    $ch = curl_init();
    // set url
    curl_setopt($ch, CURLOPT_URL, $url);
    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
    $dataCovid = curl_exec($ch);
    // tutup curl
    curl_close($ch);
    // menampilkan hasil curl
    // echo $output;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <nav>
        <a href="datacovid.php">Data Covid</a> |
            <a href="dataindonesia.php">Data Indonesia</a> |
            <a href="datacovidprovinsi.php">Data Covid Provinsi</a> |
            <a href="globalpositiff.php">global positif</a> |
            <a href="globalsembuh.php">global sembuh</a> |
            <a href="globalmeninggal.php">global meninggal</a> |


        </nav>
    </center>
    <fieldset>
        <legend>Data Covid</legend>
        <table border=1 >
            <tr>
    
                <th>GLOBAL DATA(meningal)</th> 
               
            </tr>
            <?php
$data = json_decode($dataCovid);
foreach ($data as $covid) {
    ?>
            <tr>
                <td><?php echo $covid;?></td>
          
            </tr>
            <?php
}?>
        </table>
    </fieldset>
</body>
</html>