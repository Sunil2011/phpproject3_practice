<?php
date_default_timezone_set("Asia/Kolkata");
echo date("Y-m-d").'<br>';
echo 'today is : '. date('l').'<br>';
echo 'and time is :- '.date("h:i:sa") ;
echo '<hr>';
//---------------------
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
echo '<br>';
$arr = array_change_key_case($input_array, CASE_LOWER);
print_r($arr) ;
echo '<hr>';
// -------------------------
$array1 = array(1,1,4,6,7,4);
print_r(array_unique($array1));
//----------------
echo '<hr>';
$a = array(
    a => 2, c=>5, b=>3, d=>0,
);
sort($a);
print_r($a); // keys are not associated .. reassigned
//-------------------
echo '<hr>';
$b = array(
    a =>2, c=>5, b =>3, d=>0,
);
asort($b);
print_r($b); // keys are associated ...