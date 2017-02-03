<?php

$hello = 'Hello World';
$trimmed = trim($hello,"HdWl");
print_r($trimmed);
echo '<hr>';
//-----------------wordwrap-------
$text = 'hi sunil... how are you ?';
$nwtext = wordwrap($text,5,"<br>",false);
echo $nwtext ;
echo '<hr>';
//-----------substrcount ---------
$x = 'a brown quick fox jumps over a lazy dog ';
$y = 'f';
echo 'number of times \'f\' exist in $x is : ',substr_count( $x, $y);
//------------------------
echo'<br>';
$z = strtoupper($x);
echo $z;