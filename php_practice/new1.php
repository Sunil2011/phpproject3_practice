<?php
$cars = array('car1'=>'BMW', 'car2'=>'XYZ', 'car3'=>'ABC', 'car4'=>'PQR');
print_r($cars);
?>
<h2> cars </h2>
<?php 
foreach($cars as $item ){
 echo "$item\n" ;   
}
echo '<hr>';
//------------------

$arr = array(1,2,3,4,5,6);
foreach ($arr as $value){
    echo "$value\n" ;
    $arr[] = $value*2;
}
//unset($value);
echo'<br>';
print_r($arr);

echo '<hr>';
//-----------------