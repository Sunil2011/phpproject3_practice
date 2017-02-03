<?php
$dateformat = "D d m Y g:i:s A";
$f = "temp2.txt";
date_default_timezone_set("Asia/Kolkata");
$atime = fileatime($f);
$mtime = filemtime($f);
$ctime = filectime($f);

echo $f.' was accessed on '.date($dateformat,$atime).'<br>';
echo $f.' was modified on '.date($dateformat,$mtime).'<br>';
echo $f.' was changed on '.date($dateformat,$ctime).'<br>';

