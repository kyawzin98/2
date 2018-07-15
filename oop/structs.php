<?php
//header('Content-type: text/plain');
class Database{
    public function __construct($input)
    {
        echo nl2br("{$input}\n");

    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo nl2br("destruct\n");

    }
}

$obj=new Database('construct');