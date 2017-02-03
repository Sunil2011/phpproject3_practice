<?php
$myfile = fopen("newfile.txt", "w") or die("unable to open a file.");
$txt = "hi this is first line ...\n";
fwrite($myfile, $txt);
$txt1 = "this is second line . \n";
fwrite($myfile, $txt1);
fclose($myfile);
// opening and reading of newfile in file_handling2_1.php

