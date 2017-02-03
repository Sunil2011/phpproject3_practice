<?php

function checkNum($number){
    if($number>1){
        throw new Exception("value must be 1 or below ");
    }
    return true;
}

try{
    checkNum(3);
    // if the exception is thrown  this text will not be shown 
    echo 'if you see this , this number is 1 or below';
} catch (Exception $ex) {
    echo 'massege :'.$ex->getMessage();
}