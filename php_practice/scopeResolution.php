<?php
class MyClass {
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // As of PHP 5.3.0
echo '<br>';
echo MyClass::CONST_VALUE;

echo '<hr>';
//--------------------------------------------