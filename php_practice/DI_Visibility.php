<?php

class A
    {
        protected $username = null;
        protected $password = null;
        public function __construct($username, $password)
        {
            $this->username = $username;
            $this->password = $password;
        }
    }

    class B
    {
        public $a = null;
        public function __construct(A $a)
        {
            $this->a = $a;
        }
    }
    
    $obja = new A("sunil","12345");
    $objb = new B($obja);
    print_r ($objb->a);

echo '<hr>';

class P {
    public $pub ="apple1";
    protected $prot = "apple2";
    private $priv = "apple3";
    
    function foo(){
            echo $this->pub,'<br>';
             echo $this->prot,'<br>';
             echo $this->priv,'<br>';
         }
}
$obj = new P;
echo $obj->pub,'<br>';
//echo $obj->prot; //these are not inherited 
//echo $obj->priv; 
echo '<br>';
 $obj->foo();  // 
 echo '<br>';
 
 class Q extends P{
     
    function bar(){
        echo $this->pub,'<br>';
        echo $this->prot ,'<br>';
        // echo $this->priv ,'<br>'; //private fn is not in this scop
    }
 }
 $objt = new Q;
 echo $objt->pub,'<br>';
 //echo $objt->prot,'<br>'; // these two are not inherited
 //echo $objt->priv,'<br>';
 $objt->bar();