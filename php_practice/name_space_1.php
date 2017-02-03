<?php
namespace myproject;
function output(){
    echo 'hi .. this is output1'.'<br>';
    echo 'current namespace is : ', '"', __NAMESPACE__, '"', '<br>';
    
}
 namespace RSSLib;
 function output(){
    echo 'hi... this is second output !!'.'<br>';
 }
#function calling method-1.....
 \myproject\output();
 \RSSLib\output();
 
 echo '<hr>';
 # function calling method-2......
 namespace myproject;
 output();
 
 \RSSLib\output();