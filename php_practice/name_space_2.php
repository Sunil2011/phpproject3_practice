<?php

namespace myproject {
function output(){
    echo 'hi .. this is output1'.'<br>';
    //echo 'current namespace is : ', '"', __NAMESPACE__, '"', '<br>';
    }
const foo =5;
}

 namespace {
    
    const foo =15 ;
} 


 namespace RSSLib {  // below this belongs to RSSLib namespace
 function output(){
    echo 'hi... this is second output !!'.'<br>';
 }
 const foo = 10;
 
#function calling a function in other name function .....
 \myproject\output();
 \RSSLib\output();
 echo 'calling const of same namespace : '.foo .'<br>';
 echo 'calling const of other namespace : ' .\myproject\foo ."<br>";
 echo 'calling const of global namespace : '.\foo ;
 }