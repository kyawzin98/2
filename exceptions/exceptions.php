<?php
try{
    processCC();
}catch (Exception $e){
    echo $e->getMessage().' ';
    echo get_class($e);
    echo nl2br("\n");
    echo $e->getPrevious()->getMessage().' ';
    echo get_class($e->getPrevious());

}
function processCC($numb=null,$zipCode=null){
    try{
        validate($numb,$zipCode);
    }catch (Exception $e){
        throw new BadFunctionCallException('Invalid Input',null,$e);
    }
    echo "processed";
}


function validate($numb,$zipCode){
    if (is_null($numb)){
        throw new InvalidArgumentException('No CC Number');
    }
}