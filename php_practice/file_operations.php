<!DOCTYPE HTML>
<html>
    <head>
        <title> reading a file using PHP </title>
    </head>
    <body>
        <?php
        $filename = "temp2.txt";//only html and text contents are read by fread
        //$filename = "s2.jpg";
        //$filename = php_dates.php;
        // header("Content-Type: image/jpg");
        $file = fopen($filename, "rb");
        
        if($file == false){
            echo 'error in opening file ';
            exit();
        }
        
        $filesize = filesize($filename);
        $filetext = fread( $file, $filesize );
         fclose( $file );
        
         echo ( "File size : $filesize bytes" );
         echo ( "<pre>$filetext</pre>" );
        ?>
    </body>
</html>


