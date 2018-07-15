<?php
//header('Content-type: text/plain');
class Database{
    public function __construct($input)
    {
        echo "{$input}\n";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "destruct\n";

    }
}

$obj=new Database('construct');