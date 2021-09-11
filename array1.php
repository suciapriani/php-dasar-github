<?php
//2 array asosiatif
$employee =[
    'name'=> 'john',
    'email' =>'john@xample.com',
    'phone' => '123456789',
];
echo $employee ['name'];
foreach ($employee as $key => $value){
echo $key .':'. $value;
echo '<br>';
}
?>