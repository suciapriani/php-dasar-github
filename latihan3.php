<?php
$negara = array(
 array('Benua Asia','indonesia' ,'jakarta' , 'bandung' , 'semarang' , 'jogja' , 'garut',
     'singapura' , 'jurong' , 'kampong glam' , 'paya lebar' , 'punggong' , 'novela',
     'australia' , 'linz' , 'wina' , 'graz' , 'villach' , 'innsbruck'),

 array('Benua Afrika' , 'liberia' , 'monrovia' , 'sanniquellie' , 'bensonville', 'tubnamburg', 'bopolu',
     'mali' , 'bamako', 'gao' , 'timbuktu' , 'mopti' , 'kolokani' , 'bamba',
    'gambia' , 'banjur', 'dakar' , 'bangul' , 'praia' , 'brimaka'),

array('Benua Australia' , 'victoria' , 'melbourne' , 'benalla' , 'bendigo' , 'geelong' , 'mildura',
     'northen' , 'darwin' , 'alice springs' , 'katherine' , 'palmerston' , 'territory',
     'tasmania' , 'burnie' , 'clarence' , 'devonport' , 'glenorhy', 'launceston'),

array('Benua Eropa' , 'belgia' , 'brussels', 'boullion' , 'oul rekem' , 'de haan', 'boullion',
    'prancis' , 'colmar' , 'piana' , 'Dinan' , 'Locronan', 'annecy',
    'jerman' , 'berlin' , 'Hambung' , 'munchen' , 'munich' , 'freiburgc'),
);
foreach ($negara as $key => $value) {
    echo "<p>";
    echo "<li>"; 
    echo  'Di ' . $value[0] . ' terdapat negara = ' . $value[1].
    ' dan didalamnya ada kota ' . $value[2]. ', '.$value[3].', '. $value[4]. ', '.$value[5].', '. $value[6];
    echo "<br>";
    echo "<li>";
    echo  'Di ' . $value[0] . ' terdapat negara = ' . $value[7].
    ' dan didalamnya ada kota ' . $value[8]. ', '.$value[9].', '. $value[10]. ', '.$value[11].', '. $value[12];
    echo "<br>";
    echo "<li>";
    echo  'Di ' . $value[0] . ' terdapat negara =' . $value[13]. 
    ' dan didalamnya ada kota ' . $value[14]. ', '.$value[15].', '. $value[16]. ', '.$value[17].', '. $value[18];
    
}
?>