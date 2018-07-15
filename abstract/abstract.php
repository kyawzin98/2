<?php
abstract class Database{
    abstract public function Connection();
    public function Disconnect(){
        //Disconnect form database server
    }
}
class Mysql extends Database{
    public function Connection(){

    }
}

//$db=new Database();
$mysql=new Mysql();