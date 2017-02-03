<?php

$myfile2 = fopen("newfile.txt", "r") or die("unable to open a file.");
$file = fread($myfile2, filesize("newfile.txt"));
echo"<pre> $file <pre>";
fclose($myfile2);


