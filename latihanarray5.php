<?php
$benua = array(
    array('Benua Asia','Indonesia','Jakarta','Bandung','Bekasi','Subang','Yogyakarta',
                     'Arab Saudi','Riyadh','Mekkah','Jeddah','Madinah','Dammam',
                     'Turki','Istanbul','Izmir','Bursa','Ankara','Troya'),
    array('Benua Afrika','Afrika Selatan','Cape Town','Pretoria','Soweto','Durban','Johannesburg',
                        'Maroko','Casablanca','Agadir','Meknes','Rabat','Marakkesh',
                        'Mesir','Kairo','Suez','Giza','Aswan','Bursaid'),
    array('Benua Amerika','Amerika Serikat','Newyork','Washington D.C','Los Angeles','Boston','Chicago',
                        'Kanada','Ottawa','Toronto','Montreal','Yellowknife','Iqaluit',
                        'Meksiko','Monterrey','Cancun','Puebla','Morelia','Saltillo'),
    array('Benua Eropa','Prancis','Paris','Lyon','Nice','Lille','Marseille',
                      'Denmark','Aarhus','Vejle','Odense','Aalborg','Billund',
                      'Jerman','Berlin','Hamburg','Bonn','Munchen','Dresden'),
); 
foreach ($benua as $key => $value) {
    echo "<p>";
    echo "<li>";
    echo  'Di ' . $value[0] . ' terdapat negara ' . $value[1]. ' dan didalamnya ada kota ' . $value[2]. ', '.$value[3].', '. $value[4]. ', '.$value[5].', '. $value[6];
    echo "<br>";
    echo "<li>";
    echo  'Di ' . $value[0] . ' terdapat negara ' . $value[7]. ' dan didalamnya ada kota ' . $value[8]. ', '.$value[9].', '. $value[10]. ', '.$value[11].', '. $value[12];
    echo "<br>";
    echo "<li>";
    echo  'Di ' . $value[0] . ' terdapat negara ' . $value[13]. ' dan didalamnya ada kota ' . $value[14]. ', '.$value[15].', '. $value[16]. ', '.$value[17].', '. $value[18];
    
}
