<?php
namespace name;
class X{
    public function prt()
            {
        echo'class : '. __CLASS__,"<br>";
        echo 'Function :', __FUNCTION__,"<br>";
        echo 'Method : ',__METHOD__,"<br>";
         }
}
echo 'Namespace : ',__NAMESPACE__,"<br>";
echo 'File: ',__FILE__,'<br>';
echo 'Directory : ',__DIR__,"<br>";
echo 'Line : ',__LINE__,'<br>';
//-----------------------
echo '<hr>';
$obj = new X;
$obj->prt();
echo '<hr>';
$fname ="sunil";
$lname = "kumar";
$param = compact("fname","lname");
print_r($param);
echo '<br>';
//var_dump($param);