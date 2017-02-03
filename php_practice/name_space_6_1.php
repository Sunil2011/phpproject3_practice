<?php
namespace prjt\name1 {
function output(){
    echo 'hi .. this is output1'.'<br>';
    echo 'current namespace is : ', '"', __NAMESPACE__, '"', '<br>';
    }
}

namespace prjt\name2 {
 function output(){
    echo 'hi... this is second output !!'.'<br>';
 }
}
 /*namespace{
     \prjt\name1\output();
     echo '<br>';
     \prjt\name2\output();
 }*/