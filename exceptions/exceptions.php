<?php
class InvalidCCNumberException extends InvalidArgumentException{
    public function __construct($message = "No CC Number", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
try{
    processCC();
}catch (InvalidCCNumberException $e){
    echo $e->getMessage().' ';
    echo get_class($e);
    echo nl2br("\n");
//    echo $e->getPrevious()->getMessage().' ';
//    echo get_class($e->getPrevious());

}
function processCC($numb=null,$zipCode=null){
    try{
        validate($numb,$zipCode);
    }catch (Exception $e){
//        throw new BadFunctionCallException('Invalid Input',null,$e);
        throw $e;
    }
    echo "processed";
}


function validate($numb,$zipCode){
    if (is_null($numb)){
        throw new InvalidCCNumberException();
    }
}