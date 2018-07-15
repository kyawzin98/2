<?php
trait Log{
    protected function log($smg){
        echo "{$smg}\n";
    }
}

class Table{
    use Log;

    public function save(){
        $this->log('start save');
    }
}
class Person{
    use Log;

    public function name($name){
        $this->log($name);
    }
}

(new Table())->save();
(new Person())->name('Kyaw Zin');