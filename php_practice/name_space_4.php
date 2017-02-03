<?php
namespace B{
   const foo = 20;
   function ab(){
    echo 'you are inside func. ab in namespace B';
   }
}

namespace {
    const foo = 100 ;
    echo 'calling function and const of other namespace in same file :'.'<br>';
    echo 'const foo = '.\B\foo.'<br>';
     \B\ab();
    echo "<hr>";
    //------------------
    echo 'calling function and const of other namespace in other file of same directory :'.'<br>';
   
    require_once 'name_space_5.php';
    
    echo 'const foo = '.\C\foo.'<br>';
     \C\ab();
    echo'<hr>';
    //--------------------
    echo 'calling function and const of other namespace in other file name of other sub-directory'.'<br>';
    
    require_once 'new/name_space_3.php';
    
    echo 'const foo = '.\A\foo.'<br>';
     \A\ab();
    
}