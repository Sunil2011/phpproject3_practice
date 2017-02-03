<?php
class customException extends Exception{
    public function errorMessage(){
        $errMsg = 'Error on line '.$this->getLine().'in '.$this->getFile().'<b>'.$this->getMessage().'</b> is not a valid E-mail address .';
        return $errMsg;
    }
}

$email = "someone@example...com";

try{
    if(filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE){
        throw new customException($email);
    }
} catch (customException $ex) {
    echo $ex->errorMessage();
}


