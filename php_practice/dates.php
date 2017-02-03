<?php

echo 'today is : '.date("d-m-Y") .'<br>';
echo ' day is : '.date("l").'<br>';
echo 'time is : '.date("h:i:sa").'<br>';
?>
<!DOCTYPE HTML>
<html>
    <body>
        &copy; 1992- <?php echo date("Y") ?> 
    </body>
</html>
<?php
echo '<br>';
date_default_timezone_set("Asia/Kolkata");
echo 'current time in india is : '.date("h:i:sa").'<br>';
echo 'time and date : '.date("d-m-Y  h:i:sa");
