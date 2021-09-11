<?php

$url = "https://api.kawalcorona.com/indonesia/provinsi/";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$datacovid = curl_exec($ch);

curl_close($ch);
?>
<html>
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
            <legend><h2>Data Covid</h2></legend>
            <table border = 1>
                <tr>
                    <th>NO</th>
                    <th>Provinsi</th>
                    <th>Positif</th>
                    <th>Meninggal</th>
                    <th>Sembuh</th>
                </tr>
                <?php
                $no = 1;
                    $data = json_decode($datacovid);
                    foreach ($data as $covid){
                ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $covid->attributes->Provinsi;?></td>
                    <td><?php echo $covid->attributes->Kasus_Posi;?></td>
                    <td><?php echo $covid->attributes->Kasus_Meni;?></td>
                    <td><?php echo $covid->attributes->Kasus_Semb;?></td>
                </tr>
                <?php }?>
            </table>
        </fieldset>
    </body>
</html>