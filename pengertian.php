<?php
//cara menginisialisasi array
//$array = ['one','two','three'];
//$array_length = count($array);
//for ($i = 0; $i < $array_length; ++$i){
   // echo $array[$i];
    //echo '<br>';
    //keynya negara
    //value 
    //$negara =[
     //   '' = 
   // ]
//}
//jenis jenis array dalam php
//1 array berindex numerik
//<?php
//$array = [];
//$array[0] = 'one';
//$array[1] = 'two';
//$array[2] = 'three';
//
//2 array asosiatif
///<?php
//$employee =[
   // 'name'=> 'john',
    //'email' =>'john@xample.com',
    //'phone' => '123456789',
//];
//echo $employee ['name'];
//foreach ($employee as $key => $value){
//echo $key .':'. $value;
//echo '<br>';
//}
//
//3 array multidimensi
//$employee =[
  //  'name'=> 'john',
    //'email' =>'john@xample.com',
    //'phone' => '123456789',
    //'hobbies' => ['folball','tennis'],
    //'profiles' => ['facebook' => 'johnfb', 'twiter' => 'johntw']
//];
//echo $employee['hobbies'][0];
//echo $employee['hobbies'][1];
//echo $employee['profiles']['facebook'];
//echo $employee['profiles']['twiter'];
//count()unt untuk menghitung banyaknya isi array



// arraytotable.php
$array = [
array("Dinda Dini","3", "dinda@contoh.com"),
array("David Menake", "3,3", "david@contoh.com"),
array("Diah Dimitry", "3,9", "diah@contoh.com")
];
 
echo "<table border='1'";
echo "<tr><th>Nama Mahasiswa</th><th>IPK</th><th>Email</th></tr>";
foreach ($array as $rows => $row)
{
	echo "<tr>";
	foreach ($row as $col => $cell)
	{
		echo "<td>" . $cell . "</td>";
	}	
 
}	
  echo "</tr></table>";
?>