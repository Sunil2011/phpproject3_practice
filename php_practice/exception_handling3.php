<?php
class customException extends Exception{
    public function errorMessage(){
        $errMsg = 'Error on line '.$this->getLine().'in '.$this->getFile().'<b>'.$this->getMessage().'</b> is not a valid e-mail address';
        return $errMsg;
        }
}
 $email = "someone@example.com";
 try {
     if(filter_var($email,VALIDATE_EMAIL)===FALSE ){
         throw new customException($email);
     }
     if(strpos($email, "example")!==FALSE ){
         throw new Exception("$email is an example e-mail");
     }
}
catch (customException $ex) {
    $ex->errorMessage();
     
}
catch (Exception $e){
    echo $e->getMessage();
    
}
 