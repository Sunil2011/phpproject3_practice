<!DOCTYPE HTML>
<html>
    <head>
        <title> reading a file using PHP </title>
    </head>
    <body>
        <?php
        //$filename = "temp2.txt";//only html and text contents are read by fread
        $filename = "s2.jpg";
        
        if( is_readable($filename) ){
            echo 'file is readable'.'<br>';   
        }else{
            echo 'file is not readable',"<br>";
        }
        
        $file = fopen($filename, "rb");
        
        if($file == false){
            echo 'error in opening file ';
            exit();
        }
       
        $filesize = filesize($filename);
        $filetext = fread( $file, $filesize );
         fclose( $file );
        
         echo  "File size : $filesize bytes",'<br>' ;
         echo $filetext;           
        ?>
    </body>
</html>

